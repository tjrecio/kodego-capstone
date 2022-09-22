// getting all required elements
const searchdrugSearch = document.querySelector(".search-input");
const inputBox = searchdrugSearch.querySelector("input");
const suggBox = searchdrugSearch.querySelector(".autocom-box");
const icon = searchdrugSearch.querySelector(".icon");
let linkTag = searchdrugSearch.querySelector("a");
let webLink;
// if user press any key and release
inputBox.onkeyup = (e) => {
  let userData = e.target.value; //user enetered data
  let emptyArray = [];
  if (userData) {
    emptyArray = suggestions.filter((data) => {
      //filtering array value and user characters to lowercase and return only those words which are start with user entered chars
      return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
    });
    emptyArray = emptyArray.map((data) => {
      // passing return data inside li tag
      return data = `<li>${data}</li>`;
    });
    searchdrugSearch.classList.add("active"); //show autocomplete box
    showSuggestions(emptyArray);
    let allList = suggBox.querySelectorAll("li");
    for (let i = 0; i < allList.length; i++) {
      //adding onclick attribute in all li tag
      allList[i].setAttribute("onclick", "select(this)");
    }
  } else {
    searchdrugSearch.classList.remove("active"); //hide autocomplete box
  }
}
function select(element) {
  let selectData = element.textContent;
  inputBox.value = selectData;
  searchdrugSearch.classList.remove("active");
}
function showSuggestions(list) {
  let listData;
  if (!list.length) {
    userValue = inputBox.value;
    listData = `<li>${userValue}</li>`;
  } else {
    listData = list.join('');
  }
  suggBox.innerHTML = listData;
}
