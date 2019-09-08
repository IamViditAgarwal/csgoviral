// NOTICE ABOUT WEAPONS
// -----------------------------------------------------------------------------

// Weapons are not constants and not just global variables. obviously,
// list of weapons for extras and weapons-prize must arrive from the backend.

// question: what is ATTRS?
// response: these are the attributes for creating EvWeapon objects. inside my code
//         the EvWeapon class is used, but you do not need to understand it. all,
//         what you need is to slip the correct variables WEAPON_PRIZE_ATTRS
//         and WEAPON_ACTORS_ATTRS

// WEAPON_PRIZE_ATTRS  <-- one set of attributes for a prize weapon
// WEAPON_ACTORS_ATTRS <-- array of attributes for weapon actors

// Required fields in the attributes:
//     - weapon_name (line)
//     - skin_name   (line)
//     - rarity      (one of the options: 'milspec', 'restricted', 'classified',
//                                       'covert',  'rare',       'uncommon')
//     - steam_image (link to picture)



// AT THE LOAD OF THE PAGE HAS ALL STARTED HERE
// -----------------------------------------------------------------------------

function main() {
	var
		// where to mount the tape measure
		el_parent = document.getElementById('mysite-roulette-container'),

		// initialize roulette
		roulette = new EvRoulette({
			weapon_prize_attrs:  WEAPON_PRIZE_ATTRS,
			weapon_actors_attrs: WEAPON_ACTORS_ATTRS,
			el_parent:           el_parent,
			beforeparty:         function () {
				console.log('Go!');
			},
			afterparty:          function () {
				console.log('Oh, everything');
			}
		});

	// rushed
	roulette.start();
}

document.addEventListener('DOMContentLoaded', main);
