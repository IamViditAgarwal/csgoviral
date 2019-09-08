// CLASS OF WEAPONS
// -----------------------------------------------------------------------------

function EvWeapon(id, attrs) {
	// the identifier corresponds to the ordinal index in the array of weapons
// class EvRoulette
	this.id          = id; 

	// attributes from the server
	this.weapon_name = attrs.weapon_name;
	this.skin_name   = attrs.skin_name;
	this.rarity      = attrs.rarity;
	this.steam_image = attrs.steam_image;

	// DOM element is created in a roulette renderer
	this.el          = null; 
}

EvWeapon.EL_WIDTH = 200;

// Roulette CLASS
// -----------------------------------------------------------------------------

function EvRoulette(attrs) {
	// attributes for generating this.weapons array
	this.weapon_prize_attrs  = attrs.weapon_prize_attrs;
	this.weapon_actors_attrs = attrs.weapon_actors_attrs;

	// тут будет всё оружие (оружие-приз + оружие-актёры)
	this.weapons = [];

	// родительский DOM-элемент для рулетки
	this.el_parent = attrs.el_parent;

	// DOM-элемент самой рулетки
	this.el = null;

	// parent DOM element for DOM-elements of the weapon
// (it rotates)
	this.el_weapons = null;

	// колбэк на старте вращения
	this.beforeparty = attrs.beforeparty;

	// колбэк по окончании вращения
	this.afterparty = attrs.afterparty;
}

// PARAMETERS OF THE ROULETTE
// -----------------------------------------------------------------------------

// N_WEAPONS is the total number of weapons in roulette
// (prize + possibly recurring actors)
//
// all weapons must be at least 8 pieces
// this is how it looks
//
// +---+---+---+     +---+---+---+---+---+
// | 0 | 1 | 2 | ... |L-5|L-4|L-3|L-2|L-1|
// +---+---+---+     +---+---+---+---+---+
//
// L is N_WEAPONS
// (or after calling the 'set_weapons' method: this.weapons.length)
//
// L-3 - on this place the prize weapon

// total number of weapons
EvRoulette.N_WEAPONS = 30;

// айдишник приза
EvRoulette.WEAPON_PRIZE_ID = EvRoulette.N_WEAPONS - 3;

// rotational time
EvRoulette.SPIN_SECS = 10;

// delayed start time
EvRoulette.START_DELAY_MSECS = 100;

// rotation synchronization interval
EvRoulette.SOUND_SPIN_INTERVAL = 100;

// image waiting interval
EvRoulette.IMAGE_LOAD_INTERVAL = 500;

// maximum waiting time for pictures
// after that you will have to surrender and show the broken pictures
EvRoulette.IMAGE_LOAD_WAIT_MSECS = 10 * 1000;

// sounds
EvRoulette.SOUND_START = '../case_roulette/snd/roulette_start.wav';
EvRoulette.SOUND_SPIN  = '../case_roulette/snd/roulette_spin.wav';
EvRoulette.SOUND_STOP  = '../case_roulette/snd/roulette_stop.wav';

// CREATE ARRANGEMENTS FROM ATTRIBUTES
// -----------------------------------------------------------------------------

// The question is: what's going on here?
// answer: - an array of N_WEAPONS-1 actors is created
// - position WEAPON_PRIZE_ID takes a prize

EvRoulette.prototype.set_weapons = function () {
	var
		self              = this,
		weapons           = [],
		weapon_actors_len = self.weapon_actors_attrs.length,
		j                 = 0,
		set_weapon_actors = function (from_i, to_i) {
			var i;
			for (i = from_i; i <= to_i; i += 1) {
				weapons[i] = new EvWeapon(
					i,
					self.weapon_actors_attrs[j]
				);
				j = (j === weapon_actors_len - 1) ? 0 : j + 1;
			}
		};

	if (weapon_actors_len === 0) {
		throw new Error('Error! There are no actors.');
	}

	set_weapon_actors(0, EvRoulette.WEAPON_PRIZE_ID - 1);

	weapons[EvRoulette.WEAPON_PRIZE_ID] = new EvWeapon(
		EvRoulette.WEAPON_PRIZE_ID,
		self.weapon_prize_attrs
	);

	set_weapon_actors(EvRoulette.WEAPON_PRIZE_ID + 1, EvRoulette.N_WEAPONS - 1);

	self.weapons = weapons;
};

// RENDER
// -----------------------------------------------------------------------------

EvRoulette.prototype.render = function () {
	var
		self = this,

		el_roulette      = document.createElement('div'),
		el_target        = document.createElement('div'),
		el_weapons       = document.createElement('div'),

		// counting of downloaded images
		n_images_loaded  = 0,
		image_load_wait  = 0,
		image_load_interval;

	el_roulette.id = 'ev-roulette';
	el_target.id   = 'ev-target';
	el_weapons.id  = 'ev-weapons';

	el_weapons.style.width = (EvRoulette.N_WEAPONS * EvWeapon.EL_WIDTH) + 'px';
	
	self.weapons.forEach(function (weapon) {
		var
			el_weapon                = document.createElement('div'),
			el_weapon_inner          = document.createElement('div'),
			el_weapon_rarity         = document.createElement('div'),
			el_weapon_img            = document.createElement('img'),
			el_weapon_text           = document.createElement('div'),
			el_weapon_text_name      = document.createElement('p'),
			el_weapon_text_skin_name = document.createElement('p');

		// important: onload the callback before src
		el_weapon_img.onload = function () {
			n_images_loaded += 1;
		};

		el_weapon_img.src                    = weapon.steam_image;
		el_weapon_img.alt                    = weapon.weapon_name;
		el_weapon_text_name.textContent      = weapon.weapon_name;
		el_weapon_text_skin_name.textContent = weapon.skin_name;
	
		el_weapon.className        = 'ev-weapon';
		el_weapon_inner.className  = 'ev-weapon-inner';
		el_weapon_rarity.className = 'ev-weapon-rarity ' +
			'ev-weapon-rarity-' + weapon.rarity;
		el_weapon_text.className   = 'ev-weapon-text';
	
		el_weapon_text.appendChild(el_weapon_text_name);
		el_weapon_text.appendChild(el_weapon_text_skin_name);
		el_weapon_inner.appendChild(el_weapon_rarity);
		el_weapon_inner.appendChild(el_weapon_img);
		el_weapon_inner.appendChild(el_weapon_text);
		el_weapon.appendChild(el_weapon_inner);
	
		weapon.el = el_weapon;	
		
		el_weapons.appendChild(weapon.el);
	});

	el_roulette.appendChild(el_target);
	el_roulette.appendChild(el_weapons);

	// we wait for loading of all pictures
	// At the end we start to rotate
	image_load_interval = setInterval(function () {
		image_load_wait += EvRoulette.IMAGE_LOAD_INTERVAL;

		// full combat readiness or can not wait anymore
		if (
			(n_images_loaded === EvRoulette.N_WEAPONS) ||
			(image_load_wait >= EvRoulette.IMAGE_LOAD_WAIT_MSECS)
		) {
			clearInterval(image_load_interval);

			self.el_weapons = el_weapons;
			self.el         = el_roulette;

			self.el_parent.appendChild(self.el);
			
			self.spin();
		}
	}, EvRoulette.IMAGE_LOAD_INTERVAL);
	
};

// UCHU ROULETTE TO MAKE SOUNDS
// -----------------------------------------------------------------------------

EvRoulette.prototype.make_sound = function (sound) {
	var audio    = new Audio(sound);
	audio.volume = 0.2;
	audio.play();
};

// ROTATION OF ROULETTE
// -----------------------------------------------------------------------------

EvRoulette.prototype.spin = function () {
	var
		self = this,

		el_weapon_width_1_2  = Math.floor(EvWeapon.EL_WIDTH / 2),
		el_weapon_width_1_20 = Math.floor(EvWeapon.EL_WIDTH / 20),

		rand = function (min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		},

		// random stopping coordinate
		rand_stop = (EvRoulette.N_WEAPONS - 5) * EvWeapon.EL_WIDTH +
		            el_weapon_width_1_2 +
		            rand(el_weapon_width_1_20, (18 * el_weapon_width_1_20)),
		
		// these guys are used to synchronize the sound
		// (when the target coincides with the beginning of the next weapon, it should tick)
		sound_spin_interval,
		// counts the number of weapons passed during the rotation
		spin_counter = 0;

	// animation is now through 'transition', and not through 'animation'
// 'ease-out' is a smooth deceleration of the tape measure
	self.el_weapons.style.transition =
		'left ' + EvRoulette.SPIN_SECS + 's ease-out';

	// slightly delayed start
// (because you can not immediately set the ccc property 'left')
	setTimeout(function () {
		// before the start there may be a need to create something
		self.beforeparty();

		self.make_sound(EvRoulette.SOUND_START);
		self.el_weapons.style.left = '-' + rand_stop + 'px';

		// here is an attempt to synchronize the sound of rotation with the animation
		sound_spin_interval = setInterval(function () {
			var
				current_left = Math.abs(
					parseInt(window.getComputedStyle(self.el_weapons).left, 10)
				),
				current_spin_counter = Math.floor(
					(current_left + el_weapon_width_1_2) / EvWeapon.EL_WIDTH
				);
			// roulette is getting to new weapons
			if (current_spin_counter > spin_counter) {
				spin_counter = current_spin_counter;
				self.make_sound(EvRoulette.SOUND_SPIN);
			}
		}, EvRoulette.SOUND_SPIN_INTERVAL);
	
	}, EvRoulette.START_DELAY_MSECS);

	// animation stopped
// means roulette too
	self.el_weapons.addEventListener('transitionend', function () {
		clearInterval(sound_spin_interval);
		self.make_sound(EvRoulette.SOUND_STOP);
		self.weapons.forEach(function (weapon) {
			if (weapon.id !== EvRoulette.WEAPON_PRIZE_ID) {
				weapon.el.style.opacity = 0.5;
			}
		});

		// everything, roulette stopped
// Further you can do something your
		self.afterparty();

	});
};

// STARTING UP
// -----------------------------------------------------------------------------

EvRoulette.prototype.start = function () {
	// Before rendering, you need to create weapons from attributes
	this.set_weapons();

	// render, which will call this.spin () after successfully loading the images
	this.render();
};


