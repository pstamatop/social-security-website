function calculate(){
	var days=document.getElementById("days").value;
	var r = new Array();
	var temp;
	if (days >= 12000){
		temp = "Ανεξάρτητο Όριο Ηλικίας";
	}
	else if (days >= 8000){
		temp = "Απαιτούμενη Ηλικία: 67";
	}
	else{
		temp = "Απαιτούμενες Ημέρες: 700";
	}
	t = temp
	if (document.getElementById("reduced").checked == true){
		temp = t.concat(", Μείωση 15%");
	}
	r.push(temp);
	r.push("Επιλογή 2");
	r.push("Επιλογή 3");
	r.push("Επιλογή 4");

	return r;
	// document.getElementById("res").innerHTML = r;

}

var list = new Array();
var pageList = new Array();
var currentPage = 1;
var numberPerPage = 1;
var numberOfPages = getNumberOfPages();

function makeList() {
    list = calculate();

    numberOfPages = getNumberOfPages();
}
    
function getNumberOfPages() {
    return Math.ceil(list.length / numberPerPage);
}

function nextPage() {
    currentPage += 1;
    loadList();
}

function previousPage() {
    currentPage -= 1;
    loadList();
}

function firstPage() {
    currentPage = 1;
    loadList();
}

function lastPage() {
    currentPage = numberOfPages;
    loadList();
}

function loadList() {
    var begin = ((currentPage - 1) * numberPerPage);
    var end = begin + numberPerPage;

    pageList = list.slice(begin, end);
    drawList();
    check();
}
    
function drawList() {
    document.getElementById("list").innerHTML = "";
    for (r = 0; r < pageList.length; r++) {
        document.getElementById("list").innerHTML += pageList[r] + "<br/>";
    }
}

function check() {
    document.getElementById("next").disabled = currentPage == numberOfPages ? true : false;
    document.getElementById("previous").disabled = currentPage == 1 ? true : false;
    document.getElementById("first").disabled = currentPage == 1 ? true : false;
    document.getElementById("last").disabled = currentPage == numberOfPages ? true : false;
}

function load() {
    makeList();
    loadList();
}
    
window.onload = load;

if($('#disability').is(':selected')) { 
  $( "#disabilityDiv" ).show();
}
else{
  $( "#disabilityDiv" ).hide();
}

$( "#category" ).on("change",function() {
  // $( "#insured-fields" ).toggle( "slow", function() {
  //   // Animation complete.
  // });
          if($('#disability').is(':selected')) { 
          $( "#disabilityDiv" ).show( "slow", function() {
            // Animation complete.
            });
        }
        else{
          $( "#disabilityDiv" ).hide( "slow", function() {
    // Animation complete.
            });
        }
});
