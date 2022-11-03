import { Player } from "./classes/player.js";
import { IsPlayer } from "./interfaces/IsPlayer.js";

const mashrafii = new Player('Mashrafi', 40, 'Bangladesh')
let sakib: IsPlayer;
sakib = new Player('Sakib', 34, 'Bangladesh');

// console.log(saakib.name);
console.log(sakib.getAge());

mashrafii.play();

const players1: IsPlayer[] = [];

players.push(mashrafi);
// players.push(sakib);

