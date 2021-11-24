'use-strict';

const weekdays = ['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'];
const openingHours = {
  [weekdays[3]]: {
    open: 12,
    close: 22,
  },
  [weekdays[4]]: {
    open: 11,
    close: 23,
  },
  [weekdays[5]]: {
    open: 0, // Open 24 hours
    close: 24,
  },
};


const restaurant = {
    name: 'Classico Italiano',
    location: 'Via Angelo Tavanti 23, Firenze, Italy',
    categories: ['Italian', 'Pizzeria', 'Vegetarian', 'Organic'],
    starterMenu: ['Focaccia', 'Bruschetta', 'Garlic Bread', 'Caprese Salad'],
    mainMenu: ['Pizza', 'Pasta', 'Risotto'],
  
    // ES6 enhanced object literals
    openingHours,
  
    order(starterIndex, mainIndex) {
      return [this.starterMenu[starterIndex], this.mainMenu[mainIndex]];
    },
  
    orderDelivery({ starterIndex = 1, mainIndex = 0, time = '20:00', address }) {
      console.log(
        `Order received! ${this.starterMenu[starterIndex]} and ${this.mainMenu[mainIndex]} will be delivered to ${address} at ${time}`
      );
    },
  
    orderPasta(ing1, ing2, ing3) {
      console.log(
        `Here is your declicious pasta with ${ing1}, ${ing2} and ${ing3}`
      );
    },
  
    orderPizza(mainIngredient, ...otherIngredients) {
      console.log(mainIngredient);
      console.log(otherIngredients);
    },
  };


  //Spread operator
const arr =[20,21,23];
const addarr=[18,19, ...arr];
console.log(addarr);

// Iterables: arrays, strings, etc
const str = 'Sumant';
const letters = [...str, ' ', 'S.'];
console.log(letters);
console.log(...str);

// Destructuring Arrays
const arr1 = [2, 3, 4];
const a = arr1[0];
const b = arr1[1];
const c = arr1[2];
const [x, y, z] = arr1;
console.log(x, y, z);
console.log(arr1);



// Rest Pattern and Parameters

// 1) Destructuring

// SPREAD, because on RIGHT side of =
const arr2 = [1, 2, ...[3, 4]];
// REST, because on LEFT side of =
const [aa, bb, ...other] = [1, 2, 3, 4, 5];
console.log(aa, bb, other);

//logical operators
console.log(3 || 'Sumant');
console.log('' || 'Sumant');
console.log(true || 0);
console.log(undefined || null);



// Sets
const ordersSet = new Set([
  'Pasta',
  'Pizza',
  'Pizza',
  'Risotto',
  'Pasta',
  'Pizza',
]);
console.log(ordersSet);
console.log(new Set('Sumant'));
console.log(ordersSet.size);
console.log(ordersSet.has('Pizza'));
console.log(ordersSet.has('Bread'));
ordersSet.add('Garlic Bread');
ordersSet.add('Garlic Bread');
ordersSet.delete('Risotto');
// ordersSet.clear();


// Maps: Fundamentals
const rest = new Map();
rest.set('name', 'Classico Italiano');
rest.set(1, 'Firenze, Italy');
console.log(rest.set(2, 'Lisbon, Portugal'));

//string functions 
const airline = 'TAP Air Portugal';
const plane = 'A320';
console.log(plane[0]);
console.log(plane[1]);
console.log(plane[2]);
console.log('B737'[0]);
console.log(airline.length);
console.log('B737'.length);
console.log(airline.indexOf('r'));
console.log(airline.lastIndexOf('r'));
console.log(airline.indexOf('portugal'));
console.log(airline.slice(4));
console.log(airline.slice(4, 7));
console.log(airline.slice(0, airline.indexOf(' ')));
console.log(airline.slice(airline.lastIndexOf(' ') + 1));
console.log(airline.slice(-2));
console.log(airline.slice(1, -1));


// replacing
const priceGB = '288,97£';
const priceUS = priceGB.replace('£', '$').replace(',', '.');
console.log(priceUS);


// Split and join
console.log('a+very+nice+string'.split('+'));
console.log('Sumant Mulgaonkar'.split(' '));
const [firstName, lastName] = 'Sumant Mulgaonkar'.split(' ');
const newName = ['Mr.', firstName, lastName.toUpperCase()].join(' ');
console.log(newName);
