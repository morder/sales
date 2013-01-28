
<script type="text/javascript">
    YMaps.ready(init);
    var myMap;
    var result;
    var placemark;
    function init(){
        myMap = new YMaps.Map ("yandexMap", {
            center: [53.903132,27.556708],
            zoom: 12
        });
    }

    $(document).ready(function(){
        $("#map-search-btn").click(function(){
            var search_text = $("#map-search-form").find("input").val();

            var myGeocoder = YMaps.geocode("Беларусь Минск " + search_text);
            myGeocoder.then(
                    function (res) {
                        result = res;
                        //console.log(res);
                        //alert('Координаты объекта :' + res.geoObjects.get(0).geometry.getCoordinates());
                        var coord = res.geoObjects.get(0).geometry.getCoordinates();
                        var lng = coord[0];
                        var lat = coord[1];

                        if (placemark != null){
                            myMap.geoObjects.remove(placemark);
                        }

                        placemark = new YMaps.Placemark(coord, {
                            //balloonContent: '<img src="http://img-fotki.yandex.ru/get/6114/82599242.2d6/0_88b97_ec425cf5_M" />',
                            //iconContent: "Я"
                        }, {
                            //preset: "twirl#yellowStretchyIcon",
                            preset: "twirl#houseIcon"
                            // Отключаем кнопку закрытия балуна.
                            //balloonCloseButton: false,
                            // Балун будем открывать и закрывать кликом по иконке метки.
                            //hideIconOnBalloonOpen: false
                        });

                        //placemark = new YMaps.Placemark(coord);

                        //myMap.addOverlay(placemark);
                        //myMap.setCenter(coord);

                        myMap.geoObjects.add(placemark);

                        var myCallback = function(err) {
                                    if (err) {
                                        throw new Error('Действие не выполнилось.');
                                    }
                                };

                        var myAction = new YMaps.map.action.Single({
                            center: coord,
                            zoom: 14,
                            duration: 500,
                            timingFunction: 'ease-in'
                            //checkZoomRange: true
                            //callback: myCallback
                        });

                        myMap.action.execute(myAction);

                        /*myMap.geoObjects.add(
                                new YMaps.Placemark(
                                        [res.geoObjects.get(0).geometry.getCoordinates()[0], res.geoObjects.get(0).geometry.getCoordinates()[1]]
                                )
                        );

                        myMap.setBounds(res.geoObjects.get(0).geometry.getCoordinates(), {
                            checkZoomRange: true,
                            callback: function(err) {
                                if (err) {
                                    // Не удалось показать заданный регион
                                    // ...
                                }
                            }
                        });*/
                    },
                    function (err) {
                        alert('Ошибка');
                    }
            );
            console.log(search_text);
        });
    });
</script>

<div class="row">

    <div class="container-fluid">
        <div class="row-fluid">

            <form id="map-search-form" class="form-search" onsubmit="return false;">
                <div class="input-append">
                    <input type="text" class="search-query input-xxlarge" placeholder="Введите интересующий вас адрес">
                    <button id="map-search-btn" type="submit" class="btn">Поиск</button>
                </div>
            </form>

            <div id="yandexMap" class="img-polaroid" style="height: 500px"></div>

            <div class="hero-unit">
                <h1>Hello, world!</h1>
                <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                <p><a class="btn btn-primary btn-large">Learn more »</a></p>
            </div>

        </div>
    </div>

</div>