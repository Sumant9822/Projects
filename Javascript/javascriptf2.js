//Functions 

function name1(){
    console.log('My name is Sumant');
}
name1();
name1();

function fruitShake(apples, oranges){
    const juice= `Juice with ${apples} apples and ${oranges} oranges` ;
    return juice;
}

const appleJuice = fruitShake(4, 0);
console.log(appleJuice);
const appleOrangeJuice = fruitShake( 4, 3);
console.log(appleOrangeJuice);


//Functions declaration and expression

function calAge1(birthYear){
    return 2021 - birthYear;
}

const age1 = calAge1(2000);

// express
const calAge2 = function(birthYear){
    return 2021 - birthYear;
}
const age2 = calAge2(2001);
console.log(age1, age2);

// Functions Calling Other Functions
function cutFruitPieces(fruit) {
    return fruit * 4;
  }
  function fruitProcessor(apples, oranges) {
    const applePieces = cutFruitPieces(apples);
    const orangePieces = cutFruitPieces(oranges);
    const juice = `Juice with ${applePieces} piece of apple and ${orangePieces} pieces of orange.`;
    return juice;
  }
  console.log(fruitProcessor(4, 6));

// Arrow functions
const calcAge4 = birthYeah => 2037 - birthYeah;
const age3 = calcAge4(1991);
console.log(age3);
const yearsUntilRetirement = (birthYeah, firstName) => {
  const age = 2037 - birthYeah;
  const retirement = 65 - age;
  // return retirement;
  return `${firstName} retires in ${retirement} years`;
}
console.log(yearsUntilRetirement(1991, 'Jonas')); console.log(yearsUntilRetirement(1980, 'Bob'));


// Exmaple2
const calcAge3 = function (birthYeah) {
    return 2037 - birthYeah;
  }
  const yearsUntilRetirement1 = function (birthYeah, firstName) {
    const age = calcAge3(birthYeah);
    const retirement = 65 - age;
    if (retirement > 0) {
      console.log(`${firstName} retires in ${retirement} years`);
      return retirement;
    } else {
      console.log(`${firstName} has already retired 🎉`);
      return -1;
    }
  }
  console.log(yearsUntilRetirement1(2000, 'Sumant'));
  console.log(yearsUntilRetirement1(1497, 'Sam'));



  //coding challenge 1
const calcAverage = (a,b,c) => (a+b+c)/3;
console.log(calcAverage(3,4,6));

let sDolphins = calcAverage(44,23,71);
let sKoalas = calcAverage(65,54,49);
console.log(sDolphins, sKoalas);

const checkWinner = function (avgDolphins, avgKoalas){
    if (avgDolphins >= 2 * avgKoalas) {
        console.log(`Dolphins win 🏆 (${avgDolphins} vs. ${avgKoalas})`);
      } else if (avgKoalas >= 2 * avgDolphins) {
        console.log(`Koalas win 🏆 (${avgKoalas} vs. ${avgDolphins})`);
      } else {
        console.log('No team wins...');
      }
}

checkWinner(sDolphins, sKoalas);
checkWinner(576, 100);

//ARRAYS 

const fruits = ['apples','bananas','orange'];
fruits.push('mango');
console.log(fruits);
fruits.unshift('strawberry');
console.log(fruits);
fruits.pop();
console.log(fruits);
fruits.shift();
console.log(fruits);
if (fruits.includes('bananas')) {
    console.log('You have a fruit called bananas');
  }



//coding challenge 2 
const calTip = function(bill){
    return bill >= 50 && bill <=300 ? bill * 0.15: bill * 0.2;
}

const bills = [125, 555, 44];
const tip=[calTip(bills[0]),calTip(bills[1]),calTip(bills[2])];
const totals =[bills[0]+ tip[0],bills[1]+ tip[1],bills[2]+ tip[2]];
console.log(bills, tip, totals);


//Objects 
const sumantArray=[
    'Sumant',
    'Mulgaonkar',
    2000,
    'trainee',
    ['Sameer','Saurabh','Amitesh']
];

const sumant={
    fname: 'Sumant',
    lname: 'Mulgaonkar',
    age: 2021- 2000,
    job: 'trainee',
   friends:  ['Sameer','Saurabh','Amitesh']
};

console.log(sumantArray);
console.log(sumant);
// Dot vs. Bracket Notation

console.log(sumant.fname);
console.log(sumant['fname']);

const a = 'name';
console.log(sumant['f'+ a]);
console.log(sumant['l'+ a]);

//enter from prompt
// const interestedIn = prompt('What do you want to know about Jonas? Choose between firstName, lastName, age, job, and friends');
// if (sumant[interestedIn]) {
//   console.log([interestedIn]);
// } else {
//   console.log('Wrong request! Choose between firstName, lastName, age, job, and friends');
// }

//coding challenge 3
const mark = {
    fullName: 'Mark Miller',
    mass: 78,
    height: 1.69,
    calcBMI: function () {
      this.bmi = this.mass / this.height ** 2;
      return this.bmi;
    }
  };
  const john = {
    fullName: 'John Smith',
    mass: 92,
    height: 1.95,
    calcBMI: function () {
      this.bmi = this.mass / this.height ** 2;
      return this.bmi;
    }
  };
  mark.calcBMI();
  john.calcBMI();
  console.log(mark.bmi, john.bmi);
  if (mark.bmi > john.bmi) {
    console.log(`${mark.fullName}'s BMI (${mark.bmi}) is higher than ${john.fullName}'s BMI (${john.bmi})`)
  } else if (john.bmi > mark.bmi) {
    console.log(`${john.fullName}'s BMI (${john.bmi}) is higher than ${mark.fullName}'s BMI (${mark.bmi})`)
  }

  //LOOPS
 
for (let reps = 1; reps <= 30; reps++) {
    console.log(`Lifting weights repetition ${reps}`);
  }

  for (let i = sumantArray.length - 1; i >= 0; i--) {
    console.log(i, sumantArray[i]);
  }

  //Coding challenge 4
  const calcTip = function (bill) {
    return bill >= 50 && bill <= 300 ? bill * 0.15 : bill * 0.2;
  }
  const bill = [22, 295, 176, 440, 37, 105, 10, 1100, 86, 52];
  const tips = [];
  const total = [];
  for (let i = 0; i < bill.length; i++) {
    const tip = calcTip(bill[i]);
    tips.push(tip);
    totals.push(tip + bill[i]);
  }
  console.log(bill, tips, totals);
  const calcAverage1 = function (arr) {
    let sum = 0;
    for (let i = 0; i < arr.length; i++) {
      // sum = sum + arr[i];
      sum += arr[i];
    }
    return sum / arr.length;
  }
  console.log(calcAverage1([2, 3, 7]));
  console.log(calcAverage1(total));
  console.log(calcAverage1(tips));