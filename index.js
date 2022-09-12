let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("mapCanvas"), {
    center: { lat: 14.675788, lng: 121.054634 },
    zoom: 12,
  });
}

window.initMap = initMap;