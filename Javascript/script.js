let js = "amazing";
alert("hello");
console.log(40 + 8 + 23 - 10);

//value and variable 
let country = "India";
let continent = "Asia";
let population = 140000000;
console.log("country is " + country );
console.log("continent is " + continent);
console.log("population is " + population);

// Data Types
let javascriptIsFun = true;
console.log(javascriptIsFun);

let isIsland = "India";
const language = "Hindi";
console.log(language);

// Assignment operators
let x = 10 + 5; 
x += 10; 
x *= 4; 
x++; 
x--;
x--;
console.log(x);



//coding challenge 
// const johnMass = 78;
// const johnHei = 1.69;
// const markMass = 85;
// const markHei = 1.94;

// const johnBMI = johnMass / johnHei ** 2;
// const markBMI = markMass / markHei ** 2;
// const higherBMI = markBMI > johnBMI;

// console.log(markBMI, johnBMI, higherBMI);

// template literals 
const firstName = 'Sumant';
const job = 'Trainee';
const birthYear = 2000;
const year = 2021;

const jonasNew = `I'm ${firstName}, a ${year - birthYear} year old ${job}!`;
console.log(jonasNew);

//if else 
const age = 12;
if (age >= 18) {
  console.log('Ravi can start driving license 🚗');
} else {
  const yearsLeft = 18 - age;
  console.log(`Ravi is too young. Wait another ${yearsLeft} years :)`);
}


//coding challenge 2
const johnMass = 78;
const johnHei = 1.69;
const markMass = 85;
const markHei = 1.94;

const johnBMI = johnMass / johnHei ** 2;
const markBMI = markMass / markHei ** 2;

console.log(johnBMI, markBMI);

if (markBMI > johnBMI){
    console.log(`Mark's BMI (${markBMI}) is higher than John's (${johnBMI})!`);
}
else{
   console.log(`John's BMI (${johnBMI}) is higher than Mark's (${markBMI})!`);
}


// type conversion
const inputYear = '2000';
console.log(Number(inputYear), inputYear);
console.log(Number(inputYear) + 18);
console.log(String(23), 23);

// type coercion
console.log('I am ' + 21 + ' years old');
console.log('23' - '10' - 3);


// Truthy and Falsy Values
// 5 falsy values: 0, '', undefined, null, NaN
console.log(Boolean(0));
console.log(Boolean(undefined));
console.log(Boolean('Sumant'));
console.log(Boolean({}));
console.log(Boolean(''));

const money = 100;
if (money) {
  console.log("Don't spend it all ;)");
} else {
  console.log('You should get a job!');
}


// Equality Operators: == vs. ===
const age1 = '18';
if (age1 === 18) console.log('You just became an adult :D (strict)');
if (age1 == 18) console.log('You just became an adult :D (loose)');


// Logical Operators
const hasDriversLicense = true; // A
const hasGoodVision = true; // B
console.log(hasDriversLicense && hasGoodVision);
console.log(hasDriversLicense || hasGoodVision);
console.log(!hasDriversLicense);


// coding challenge 3
const sDolphins = (96 + 108 + 89) / 3;
const sKoalas = (88 + 91 + 110) / 3;
console.log(sDolphins, sKoalas);
if (sDolphins > sKoalas) {
  console.log('Dolphins wins the trophy');
} else if (sKoalas > sDolphins) {
  console.log('Koalas wins the trophy');
} else if (sDolphins === sKoalas) {
  console.log('Both will win the trophy!');
}

// switch Statement
const day = 'friday';
switch (day) {
  case 'monday': 
    console.log('Plan course structure');
    console.log('Go to coding meetup');
    break;
  case 'tuesday':
    console.log('Prepare theory videos');
    break;
  case 'wednesday':
  case 'thursday':
    console.log('Write code examples');
    break;
  case 'friday':
    console.log('Record videos');
    break;
  case 'saturday':
  case 'sunday':
    console.log('Enjoy the weekend :D');
    break;
  default:
    console.log('Not a valid day!');
}

// The Conditional (Ternary) Operator
const age2 = 23;
// age >= 18 ? console.log('I like to drink wine 🍷') : console.log('I like to drink water 💧');
const drink = age2 >= 18 ? 'wine 🍷' : 'water 💧';
console.log(drink);


//coding challenge4
const bill = 275;
const tip = bill <= 300 && bill >= 50 ? bill * 0.15 : bill * 0.20;
console.log(`The bill was ${bill}, the tip was ${tip}, and the total value ${bill + tip}`);