
    // Add note to local storage
	
	
let addBtn = document.getElementById("adds");
addBtn.addEventListener("click", function(e) {
console.log("clicked");
  let gname = document.getElementById("gname");
  let series = document.getElementById("gseries");
  let space = document.getElementById("gspace");
  let developer = document.getElementById("gdeveloper");
  let publisher = document.getElementById("gpublisher");
  let genres = document.getElementById("ggenres");
  
    if (gname.value == "" || series.value == "" || space.value == "" || developer.value == "" || publisher.value == "" || genres.value == "" ) {
        return alert("Please add all the fields ")
    }

  let gdetail = localStorage.getItem("gamedetails");
  if (gdetail == null) {
    gameObj = [];
  } else {
    gameObj = JSON.parse(gdetail);
  }
  let myObj = {
    name: gname.value,
    series: series.value,
	space: space.value,
	developer: developer.value,
	publisher: publisher.value,
	genres: genres.value
  }
  gameObj.push(myObj);
  localStorage.setItem("gamedetails", JSON.stringify(gameObj));
  gname.value = "";
  series.value = "";
  space.value ="";
  developer.value="";
  publisher.value="";
  genres.value="";
   console.log(gameObj);
  showGames();
});

// Function to show elements from localStorage
function showGames() {
	let gdetail = localStorage.getItem("gamedetails");
	if (gdetail == null) {
	  gameObj = [];
	} else {
	  gameObj = JSON.parse(gdetail);
	}

	let html = "";
	gameObj.forEach(function(g, gid) {
	  html += `
	  <tbody class="gamedetails">
	  <tr >
	                     <td class="gid">${gid + 1}</td>
                        <td class ="gname">${g.name}</td>
                        <td class="gseries">${g.series}</td>
                        <td class="gspace">${g.space}</td>
                        <td class="gdeveloper">${g.developer}</td>
                        <td class="gpublisher">${g.publisher}</td>
                        <td class="ggenres">${g.genres}</td>
	  <td>
		  <a class="edit" id=${gid} onclick="deleteGame(this.id)" title="Delete" ><i class="material-icons"> &#xE872;</i></a>
		  <a class="delete" id=${gid} onclick="editGame(this.id)" title="Edit" ><i class="material-icons"> &#xE254;</i></a>
	  </td>
  </tr> </tbody>
			  `;
	});
	let gameElm = document.getElementById("gamedetails");
	
	if (gameObj.length != 0) {
	  gameElm.innerHTML = html;
	} else {
	  gameElm.innerHTML = `No games entered.`;
	}
  }  

  showGames();
 
  
  //edit
function editGame(gid) {
	 let gdetail = localStorage.getItem("gamedetails");
	let gname1 = document.getElementById("gname");
	let series1 = document.getElementById("gseries");
	let space1 = document.getElementById("gspace");
	let developer1 = document.getElementById("gdeveloper");
	let publisher1 = document.getElementById("gpublisher");
	let genres1 = document.getElementById("ggenres");

	// if (gname.value == "" || series.value == "" || space.value == "" || developer.value == "" || publisher.value == "" || genres.value == "" ) {
    //     return alert("Please add all the fields ")
    // }

    if (gdetail == null) {
    gameObj = [];
    } else {
      gameObj = JSON.parse(gdetail);
    }
    console.log(gameObj);

    gameObj.findIndex((g, gid) => {
		gname1.value = g.name;
		series1.value = g.series;
		space1.value =g.space;
		developer1.value=g.developer;
		publisher1.value=g.publisher;
		genres1.value=g.genres;
    })
    gameObj.splice(gid, 1);
        localStorage.setItem("gamedetails", JSON.stringify(gameObj));
        
}

showGames();
// Function to delete a note
function deleteGame(gid) {
	//   console.log("I am deleting", gid);
		let confirmDel = confirm("Do you want to delete");
		if (confirmDel == true) {
			let gdetail = localStorage.getItem("gamedetails");
			if (gdetail == null) {
				gameObj = [];
			} else {
				gameObj = JSON.parse(gdetail);
			}
	
			gameObj.splice(gid, 1);
			localStorage.setItem("gamedetails", JSON.stringify(gameObj));
			showGames();
		}
	  
	}





