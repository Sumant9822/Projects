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