<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Hello, world!</title>
    <script>//Universal resize event
        function universalResize() {
            if (typeof (Event) === 'function') { // modern browsers
                window.dispatchEvent(new Event('resize'));
            } else {

                var evt = window.document.createEvent('UIEvents');
                evt.initUIEvent('resize', true, false, window, 0);
                window.dispatchEvent(evt);
            }
        };</script>
</head>
<body>
<?php
require('header.php')
?>
<main class="main-block1">
    <div class="prev"  style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/девушка1.jpg');" >
    
        <div class="id_post"><p align="center">#16788</p></div>
        <div class="category1"><h2  class= "cattext" align="center">Итальянска кухня</h2></div>
        <div class="namepost"><h1  class= "napo" align="center">Как приготовить ньокки по особому рецепту</h1></div>
        <div class="authorp">
            <div class="avtar"><img src="img/девушка5.jpg" class="avt"></div>
            <div class="autname"><h3 class="avttext">Пархоменко Полина </h3></div>
        </div>
        <div class="datap"><h5 class="dataptext">1 марта 2020</h5></div>
        <div class="infopo">
            <span style="font-size: 65px; color: white;" class="likepo"><i class="fas fa-heart"></i>
            <h4>1512</h4>
            </span>
            <span style="font-size: 65px; color: white;"class="compo"><i class="fas fa-comment-dots"></i>
                <h4>1512</h4>
            </span>
            <span style="font-size: 65px; color: white;"class="viepo"><i class="fas fa-eye"></i>
                <h4>1512</h4>
            </span>

        </div>
    </div>
        <div class="maintextp">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla pellentesque ultricies. Fusce non lacus a purus facilisis accumsan eu sed odio. Aliquam non justo in purus pulvinar luctus. Aenean tincidunt dictum turpis non lobortis. Nam massa dolor, luctus non magna quis, elementum dapibus purus. Nulla purus lectus, cursus et malesuada vel, ultricies sed odio. Nulla mi nisi, convallis quis blandit sed, accumsan ornare mi. Nunc a ligula non arcu tristique vestibulum. Aliquam ut odio ligula. Vestibulum quis porta risus. Nullam maximus pretium tellus, quis luctus lacus dictum a. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum tempor nisi eu nisi bibendum, non efficitur urna egestas. Suspendisse euismod cursus diam, quis hendrerit metus tempor eget.

Cras consequat eros aliquam, ullamcorper purus quis, hendrerit odio. Nullam volutpat convallis sapien, vel dapibus dui laoreet viverra. Pellentesque iaculis ultrices erat, sit amet lobortis tellus scelerisque id. Phasellus tempus mattis lacus, sed tristique metus auctor id. Nunc non quam sit amet tortor ultrices feugiat. Praesent egestas accumsan augue, ut interdum lectus dictum quis. Proin efficitur enim scelerisque convallis placerat. Nullam vitae nibh congue, auctor tortor quis, ultricies nisl. Curabitur malesuada nulla elit, eu semper eros pharetra sed. Aliquam condimentum elit nec sem tempus, vitae viverra justo consequat. Quisque id sodales elit. Curabitur dapibus, dui sit amet accumsan aliquet, sem risus hendrerit dui, at facilisis enim nunc egestas odio. Praesent nec pulvinar nisi. Donec consequat volutpat nibh eget rhoncus. Cras condimentum neque eget nulla luctus aliquam. Donec commodo, velit vel viverra porttitor, ante ipsum elementum est, sit amet tincidunt lorem nisl vel odio.

Vestibulum et orci dolor. Donec congue fermentum sagittis. Curabitur viverra urna sed mauris consequat, a efficitur erat lacinia. Proin viverra massa mauris, eget interdum purus pharetra non. Morbi vestibulum aliquam mi, ut vestibulum sapien commodo quis. Integer non ante tortor. Vestibulum eu posuere ligula. Phasellus a nisi sit amet ex faucibus congue id a nulla. Duis condimentum tempus arcu quis tincidunt. In mattis molestie neque sit amet ultricies. Ut fringilla tempus aliquet. Integer consectetur bibendum mattis. Duis sit amet sagittis libero, eu semper magna. Curabitur sit amet ipsum quis ex pharetra ultricies. Quisque dignissim tempor mauris nec cursus.

Pellentesque pellentesque, erat sit amet scelerisque pretium, felis nisi tempus metus, at tincidunt nulla nunc vitae ante. Vivamus nec neque at risus rutrum aliquet at id dolor. Praesent mi ligula, eleifend non ullamcorper molestie, bibendum eu augue. Duis dignissim ligula at nunc finibus pellentesque nec a ante. Maecenas non pretium est. Cras sem eros, dictum sed faucibus a, dapibus eu neque. Maecenas accumsan elementum pharetra. Nulla a mattis sapien, vel pulvinar mi.

Nullam sit amet imperdiet metus. Nunc nec libero rhoncus lorem condimentum rutrum. In efficitur nibh quis tincidunt egestas. Praesent ac tortor et eros efficitur convallis commodo non augue. Phasellus ullamcorper, felis vel porta vestibulum, felis arcu luctus mi, et varius dui diam et nibh. Suspendisse vitae tincidunt ante. Vestibulum ullamcorper molestie dapibus. Nulla vel nibh turpis.

Cras pharetra blandit imperdiet. Vivamus venenatis gravida sem, ut condimentum ante consectetur interdum. Morbi eu efficitur odio. Nam tincidunt ac ante ut convallis. Nunc venenatis tellus ut nibh congue, vitae vehicula arcu tempor. Nullam id ultrices ligula. Sed augue quam, sollicitudin nec interdum id, facilisis quis tortor. Nulla erat quam, consequat eget tincidunt non, condimentum vel mauris. Etiam iaculis faucibus fringilla. Nulla dictum, orci non mollis lacinia, sapien elit dapibus magna, sit amet faucibus ipsum diam sed justo. Vestibulum nec nisi quam. Donec fermentum ipsum purus, et dapibus orci facilisis a. Vivamus bibendum augue sem, a mollis eros efficitur ac. Fusce fermentum elit est, ut tristique ex molestie eu.

In sed lorem id enim pharetra commodo. Sed in pellentesque ligula. Nulla sapien nulla, auctor in dui sit amet, consequat fermentum nulla. Donec cursus id turpis viverra volutpat. Sed ac elit sit amet nulla vehicula vestibulum eu id quam. Etiam sed ex eu magna condimentum bibendum id vitae enim. Quisque pharetra libero vitae leo sollicitudin mollis. Duis lacinia dictum sem, bibendum posuere enim cursus vitae. Sed accumsan mattis neque eget sagittis. Phasellus nec magna quis lectus sagittis finibus nec in ligula. Pellentesque dapibus magna id cursus blandit. Aliquam in elementum dui. Proin nulla nisl, condimentum et massa vel, egestas ullamcorper ipsum. Pellentesque sollicitudin convallis nisl a efficitur. Cras interdum arcu vitae nulla luctus lobortis. Maecenas consectetur pulvinar mi, id dignissim purus pharetra nec.

Nullam dictum ante tortor, vel commodo dui porta id. Etiam commodo risus vitae risus luctus viverra. Pellentesque viverra vel est nec facilisis. Nunc porttitor velit sit amet mauris vestibulum, sit amet eleifend velit euismod. Quisque non condimentum leo, eu convallis dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti.

Curabitur sodales nulla in ex iaculis rhoncus. Vestibulum et nulla hendrerit, volutpat eros vel, gravida est. Nam et leo leo. Phasellus non congue felis, eu dictum neque. Nullam efficitur lacus ac lacus accumsan fringilla. Etiam facilisis dignissim ullamcorper. Sed posuere purus sed neque ornare, eget molestie elit luctus. Aliquam ac molestie nisi, vitae sagittis enim.

Nunc orci magna, molestie a faucibus at, blandit non augue. Mauris rutrum nunc ac vestibulum porta. Vestibulum quis elit imperdiet ipsum semper tincidunt. Integer ac tincidunt lorem, at bibendum ante. Cras nec blandit dui. Phasellus ornare nunc sed ligula elementum, non tristique odio venenatis. Aliquam vitae iaculis nibh. In hac habitasse platea dictumst. Praesent eros purus, placerat nec enim sit amet, posuere luctus dui. Proin nec cursus orci, vel rutrum dolor. Aliquam erat volutpat. Vestibulum hendrerit tincidunt ex at fermentum. In convallis faucibus rhoncus. Suspendisse sed ex non leo vehicula bibendum id nec neque. Maecenas vel pellentesque dolor.
Nullam sit amet imperdiet metus. Nunc nec libero rhoncus lorem condimentum rutrum. In efficitur nibh quis tincidunt egestas. Praesent ac tortor et eros efficitur convallis commodo non augue. Phasellus ullamcorper, felis vel porta vestibulum, felis arcu luctus mi, et varius dui diam et nibh. Suspendisse vitae tincidunt ante. Vestibulum ullamcorper molestie dapibus. Nulla vel nibh turpis.

Cras pharetra blandit imperdiet. Vivamus venenatis gravida sem, ut condimentum ante consectetur interdum. Morbi eu efficitur odio. Nam tincidunt ac ante ut convallis. Nunc venenatis tellus ut nibh congue, vitae vehicula arcu tempor. Nullam id ultrices ligula. Sed augue quam, sollicitudin nec interdum id, facilisis quis tortor. Nulla erat quam, consequat eget tincidunt non, condimentum vel mauris. Etiam iaculis faucibus fringilla. Nulla dictum, orci non mollis lacinia, sapien elit dapibus magna, sit amet faucibus ipsum diam sed justo. Vestibulum nec nisi quam. Donec fermentum ipsum purus, et dapibus orci facilisis a. Vivamus bibendum augue sem, a mollis eros efficitur ac. Fusce fermentum elit est, ut tristique ex molestie eu.

In sed lorem id enim pharetra commodo. Sed in pellentesque ligula. Nulla sapien nulla, auctor in dui sit amet, consequat fermentum nulla. Donec cursus id turpis viverra volutpat. Sed ac elit sit amet nulla vehicula vestibulum eu id quam. Etiam sed ex eu magna condimentum bibendum id vitae enim. Quisque pharetra libero vitae leo sollicitudin mollis. Duis lacinia dictum sem, bibendum posuere enim cursus vitae. Sed accumsan mattis neque eget sagittis. Phasellus nec magna quis lectus sagittis finibus nec in ligula. Pellentesque dapibus magna id cursus blandit. Aliquam in elementum dui. Proin nulla nisl, condimentum et massa vel, egestas ullamcorper ipsum. Pellentesque sollicitudin convallis nisl a efficitur. Cras interdum arcu vitae nulla luctus lobortis. Maecenas consectetur pulvinar mi, id dignissim purus pharetra nec.

Nullam dictum ante tortor, vel commodo dui porta id. Etiam commodo risus vitae risus luctus viverra. Pellentesque viverra vel est nec facilisis. Nunc porttitor velit sit amet mauris vestibulum, sit amet eleifend velit euismod. Quisque non condimentum leo, eu convallis dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti.

Curabitur sodales nulla in ex iaculis rhoncus. Vestibulum et nulla hendrerit, volutpat eros vel, gravida est. Nam et leo leo. Phasellus non congue felis, eu dictum neque. Nullam efficitur lacus ac lacus accumsan fringilla. Etiam facilisis dignissim ullamcorper. Sed posuere purus sed neque ornare, eget molestie elit luctus. Aliquam ac molestie nisi, vitae sagittis enim.

Nunc orci magna, molestie a faucibus at, blandit non augue. Mauris rutrum nunc ac vestibulum porta. Vestibulum quis elit imperdiet ipsum semper tincidunt. Integer ac tincidunt lorem, at bibendum ante. Cras nec blandit dui. Phasellus ornare nunc sed ligula elementum, non tristique odio venenatis. Aliquam vitae iaculis nibh. In hac habitasse platea dictumst. Praesent eros purus, placerat nec enim sit amet, posuere luctus dui. Proin nec cursus orci, vel rutrum dolor. Aliquam erat volutpat. Vestibulum hendrerit tincidunt ex at fermentum. In convallis faucibus rhoncus. Suspendisse sed ex non leo vehicula bibendum id nec neque. Maecenas vel pellentesque dolor.
</p>

<div class="down-info">
    <div class="down-cat"><p>Категории: </p><p>кулинария,</p><p>итальянская кухня</p></div>
    <div class="down-like">
        <span style="font-size: 45px;" class="down-like"><i class="fas fa-heart"color: black;"></i><h5 class="lol">Мне нравится</h5></span>

    </div>
</div>
        </div>
        <div class="commentblock">
            <form action="" method="post" enctype="multipart/form-data">
                
                <h2>Комментарии (989)</h2>
                <hr>
               
            </form>
            

        </div>
</main>
<?php
require('footer.php')
?>
</body>
</html>