function initMap() {
    const uluru = { lat: 45.33765591551561, lng: 14.425869584512041 };
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 16,
      center: uluru,
    });
    const marker = new google.maps.Marker({
      position: uluru,
      map: map,
    });
  }