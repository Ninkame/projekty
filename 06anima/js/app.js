let player_one = [];
let player_two = [];
let turn = 1;

let win_combination = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9],
  [1, 4, 7],
  [2, 5, 8],
  [3, 6, 9],
  [1, 5, 9],
  [3, 5, 7],
];

let area = document.querySelectorAll('.area');
let container = document.querySelector('.container');

// na kazdu kocku pridat event click
for (let i = 0; i < area.length; i++) {
  area[i].addEventListener('click', function () {
    if (turn % 2 !== 0) {
      this.innerHTML = 'X';
      player_one.push(i + 1);
      console.log(player_one);
    } else {
      this.innerHTML = 'O';
      player_two.push(i + 1);
      console.log(player_two);
    }
    turn++;
  });
}
let jeho = [1,2,3];
// console.log(jeho.some((el) => win_combination[0].includes(el)));

console.log(jeho.every(v => v === win_combination[0]));


// let p = [1,2,3];
// let o = [3,4,5];
// let x = p[o];
// console.log(x);
