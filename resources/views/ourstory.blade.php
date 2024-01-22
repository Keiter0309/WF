<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/3.png') }}">
    <title>Royal Terroir</title>
    @vite('resources/css/app.css')
</head>
<body class="font-['laila']">
    <style>
        @keyframes fadeIn {
            0% {opacity: 0;}
            100% {opacity: 1;}
        }

        @keyframes slideIn {
            0% {transform: translatey(-100%);}
            100% {transform: translateX(0);}
        }

        @keyframes slideInRight {
            0% {transform: translateX(100%);}
            100% {transform: translateX(0);}
        }

        @keyframes slideDown {
            0% {transform: translateY(-100%);}
            100% {transform: translateY(0);}
        }

        h1, p, img {
            animation-duration: 2s;
            animation-fill-mode: forwards;
        }

        h1 {
            animation-name: fadeIn;
        }

        h1.royal-terroir {
            animation-name: slideDown;
        }

        p {
            animation-name: slideIn;
        }

        img {
            animation-name: slideInDown;
        }
    </style>
@include('navigation')

<!-- Thêm phần Our Story vào trang của bạn -->
<section class="bg-gray-60 py-16">
    <div class="container mx-auto px-4" id="content" style="overflow: hidden; height: 110px;">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Our Story</h2>
            <p class="text-black-600 mb-8">
                Welcome to Royal Terroir, where passion for fine wines meets a commitment to quality. Our journey began with a love for the art of winemaking and a desire to share exceptional experiences with wine enthusiasts like you.
            </p>
            <p class="text-black-600 mb-8">
                <img src="https://cellar.asia/vi/wp-content/uploads/sites/6/2019/01/cellar-asia-history-of-wine-1200x800-75-1.jpg" alt="">
                <h3 class="text-2xl font-blod mb-6">Your favorite drink goes back thousands of years</h3> <br>
Wine has been a part of life since 7000 BC. Since then, it has helped shape communities and industries across the regions in which it grows. It has played an important part in trade, war and culture.
<br>
7000 BC
The earliest known wines came from the Yellow River Valley in China. Here, the tribes ferment honey, rice, and, and various fruits and store them in large earthenware vessels (basically giant clay jars), which are then buried in the ground. Over the course of several thousand years, this method has spread and is still used in some countries today.
<br>
5000 BC <br>
<img src="https://cellar.asia/vi/wp-content/uploads/sites/6/2019/01/cellar-asia-history-of-wine-768-1-75.jpg" alt="" srcset="">
Archaeologists have discovered that wine was produced 7,000 years ago in present-day Iran, at the time it was the first permanent settlement in the Middle East.
History of wine
<br>
4000 BC <br>
Early settlers in present-day Sicily began growing grapes very early. Eventually, the settlers began to produce Marsala, a famous wine made from native grapes and with unique winemaking practices.
<br>
From 1600-1000 BC <br>
This is a time when historians believe that wine began to be transported on a regular basis in ancient Israeli and Greek cultures. The wine is stored in goat leather sacks for commercial use and moves with people during their travels.
Also around this time, the texts and drawings of wine and the cultivation of fruits and grapes used as wine were engraved on the wood panels 
<br>
900 BC <br>
We are entering an era where we can see that the winemaking activities are more modern. Civilizations such as those in Northern Europe, who had the right to use oak, began using oak barrels to store their wines. We envision that it was from this method that they discovered that oak can add flavor and oxidize the wine slowly; and so on; a reality that we still use today.
<br>
Year 1000 <br>
For hundreds of years before this time, wine-making skills and modes of transportation began to develop. Skills and methods have been shared all over the world. Around 1000, Chateau de Goulaine was built, which is believed to be the oldest operating winery.
<img src="https://cellar.asia/vi/wp-content/uploads/sites/6/2019/01/cellar-asia-history-of-wine-768-2-75.jpg" alt="">
<br>
From 1400-1500 <br>
European culture has discovered the joy of wine exploding after wines used for commercial purposes have undergone secondary fermentation grade, make the wine explode. Around the same time, popular and successful grape varieties in Europe were shipped to South America for cultivation.
<br>
In the 1740s <br>
Modern glass bottles are designed. While they had started using glass bottles a hundred years earlier, cork was kept dry and they were difficult to transport.
<img src="https://cellar.asia/vi/wp-content/uploads/sites/6/2019/01/cellar-asia-history-of-wine-768-3-75-720x1024.jpg" alt="">
<br>
In 1964 <br>
Canned wine is introduced
<br>
In 2010 <br>
Cabernet Sauvignon is the most cultivated red grape in the world, Airen is the most cultivated white grape in the world.
<br>
The development of wine production <br>
<img src="https://cellar.asia/vi/wp-content/uploads/sites/6/2019/01/cellar-asia-history-of-wine-768-4-75.jpg" alt="">
History of wine
Although wine has been a part of history for thousands of years, it has not always been the same as it is today. The development of winemaking and viticulture throughout the centuries has affected the likelihood of success of grape growing, grape harvesting, and, winemaking and bottling for transportation. Most of these very significant changes appeared during the industrial revolution.
<br>
Viticulture <br>
Thousands of years ago, grape growers could only grow native grapes. Today vines have been transported around the world and we have even been able to grow new clones to create viable varieties of grapes withstands harsher environments and is less sick and fungal.

While some grafting and pruning practices have been around for thousands of years, the methodological process of doing this is still a fairly new one. When vines fall into a dormant state, gardeners can prune vines to control how they grow, too, control the number of bunches of grapes that will grow and keep the vine healthy.

Some areas near water reservoirs were accessible to medieval irrigation systems, however, they were not usually used for vines. Even then it is understood that most vines will grow best when they struggle a little to get water. In fact, too much water can be very dangerous. To this day, most areas do not water their vines.

Of course, there were no pesticides until recently. Thousands of years ago until about 100 years ago, regions where viticulture could successfully grow and produce viable grape varieties annually were quite limited. With modern technology and pesticides, we can expand the number of vineyards.

Areas with higher humidity can grow grapes because we have sprays that help reduce the risk of fungi and mold. We can also use insecticides to reduce the possibility of problems with bedbugs and other organisms. Vines can grow longer and retain their quality throughout those years.

It is thought that hundreds of years ago, re-cultivation are common habits and vines are often not mature because they often deal with bed bugs and other diseases, such as, force the grower to re-plant the vine.
<br>
Harvested
One of the fairly consistent winemaking processes over the centuries has been the method of manual harvesting. Most areas of the Old World are serious about picking grapes to make sure the grapes are selected for the best quality. Other areas are too steep or the vine is too close together to be harvested by machine.

Classification, separation of grape stalk, grinding grapes
Just like picking grapes by hand while harvesting, most of the time grapes are still classified by hand. Some large wineries used a machine that was originally used to classify cherries and now they use to classify their grapes.

This machine picks up the crumbs, bad grapes, vv spoiled berries and leaves only viable grapes. For winemaking processes including the separation of grape stalk, this process has undergone a complete hand-made process until the use of a grape stem separator.

The machines with rubber pegs are attached to a rotating cylinder and essentially separate the grapes from the stalk. This process will take a long time if done by hand.

We have all seen pictures of harvest parties where you can come and crush grapes with your feet. These are the ways that are used to squeeze grape juice. A few hundred years ago, some regions begin to fabricate these barrel-shaped crushers that allow you to spin a lever then crush the grapes and the juice that flows out from the inner slots barrel.
<br>
Additives 
<br>
Additives such as sugar, commercial yeast and clear-cutting substances are very recent compared to the history of winemaking. Unsurprisingly, the use of oak has been around for hundreds of years and was originally strictly used to store wine, until it was discovered that the wine brewed in oak brought many benefits to the wine flavor.

Grapes and all naturally leavened fruits begin to ferment the juice after the grape skins have been crushed. Currently, the, we can grow special yeasts in laboratories that give winemakers more control over the winemaking and production processes produce the products they want. Today, some winemakers still choose to use natural yeast in winemaking.

The sugar additive is a tool that helps winemakers produce wines that are suitable when it comes to the low-sugar grape season. Sugar was not a popular and affordable commodity until recently. Most old world wine regions actually forbid the use of sugar in wine. However, it has helped new world wineries produce wine accordingly, especially in regions and climates that produce grapes with low sugar.

All new additives are used in close proximity due to chemicals that are currently controlled and manufactured for commercial purposes.
<br>
Wine filter
<br>
The process of filtering alcohol is not as new as many people think. Although today we have complex machines capable of filtering wine at a very fast rate to any level you want, there are many ways of housing winemaking has filtered wine hundreds of years ago.

The sparse cloth filter bag allows wine makers to filter out most of the particles and perforations that can be noticed in the wine. This is also the most common filter for home winemakers today.
<br>
The development of consumer behavior through the ages
<img src="https://cellar.asia/vi/wp-content/uploads/sites/6/2019/01/cellar-asia-history-of-wine-768-5-75.jpg" alt="">
History of wine
The consumption of wine from thousands of years ago to modern times has changed dramatically. From the amount consumed, to the age of the consumer, to the customs associated with enjoying wine; it is no surprise that wine has been an important part of society for thousands of years.

While historians are not sure how wine played a role in society throughout wine history,wine is said to have played a similar role today for thousands of years; it is a cultural and communal drink.

Symbol
<br>
When the wine trade began several thousand years ago in areas such as Mesopotamia, the, only the rich and nobles can buy wine. The consumption of wine is a status symbol for those who can afford it. Although today everyone in most places can buy wine, but it can still be a status symbol of the consumption and collection of the world's finest and rarest wines.

We still see wine as a form of status symbol in some parts of the world today, especially China and other Asian countries. Wine consumption here is quite new, it has become a mark of wealth. Those who can buy it are collectors of some of the best wines from France and other Old World regions. You will see a rich wine menu at good restaurants and hotels.

Just like in other countries around the world, as wine products continue to grow and China opens up the import market for more options for affordable wines. China will soon become the second leading wine consumer after the United States.
<br>
Productivity
<br>
Modern technology and winemaking practices make wine production relatively stable, thousands of years ago, harvesting was a much more difficult practice. The ability to produce wine depends on a good harvest. The good harvest years have been celebrated along with the production and consumption of wine and are said to bode well for the productivity of the following year.
<br>
Religiously
<br>
History of wine
<img src="https://cellar.asia/vi/wp-content/uploads/sites/6/2019/01/cellar-asia-history-of-wine-768-6-75.jpg" alt="">
Wine played an important part of many religions throughout history, including Greek mythology, Christianity and Buddhism.

The Greeks offered wine to their gods and were used in many ceremonies. In Christianity, red wine has symbolized the blood of Christ and is still being used in the masses and ceremonies today. Buddhists are said to place wine glasses on their altars as a symbol of respect and sacrifice.

Some rituals, rituals, and social practices revolve entirely around wine and have been an integral part of countless communities throughout history.

During this time, viticulture and winemaking have evolved into an incredible and ever-changing industry. After the grapes are crushed with the legs and the wine is kept in the goat skin sacks, the, wine is now grown and harvested commercially and shipped in boxes around the world.
            </p>
            <p class="text-black-600 mb-8">
                Explore the rich flavors, exquisite aromas, and the stories behind each bottle. Join us on this journey, and let Royal Terroir be your guide to a world of unparalleled wine experiences.
            </p>
        </div>
    </div>
    <div class="flex justify-center items-center my-10">
        <button id="toggleButton" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700 hover:text-white">Read More</button>
    </div>
</section>


<!-- Footer -->
<footer class="footer-1 py-8 sm:py-12 font-mono" style="font-family: laila;" id="footer_main">
    <div class="container mx-auto px-4">
        <div class="sm:flex sm:flex-wrap sm:-mx-4 md:py-4">
            <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6">
                <h5 class="text-xl font-bold mb-6">About Us</h5>
                <ul class="list-none footer-links">
                    <li class="mb-2">
                        <a href="#"
                           class="border-b border-solid border-transparent ">The point of using Lorem Ipsum is that it
                            has a more-or-less normal distribution of letters, as opposed to using 'Content here,
                            content here', making it look like readable.</a>
                    </li>
                    <li class="mb-2">
                        <a href="#"
                           class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Read
                            More</a>
                    </li>

                </ul>
            </div>
            <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 sm:mt-0">
                <h5 class="text-xl font-bold mb-6">Categories</h5>
                <ul class="list-none footer-links">
                    <li class="mb-2">
                        <a href="#"
                           class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Cheese</a>
                    </li>
                    <li class="mb-2">
                        <a href="#"
                           class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Event
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#"
                           class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Sommerliers
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#"
                           class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Tasting
                        </a>
                    </li>
                </ul>
            </div>
            <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0">
                <h5 class="text-xl font-bold mb-6">About</h5>
                <ul class="list-none footer-links">
                    <li class="mb-2">
                        <a href="#"
                           class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Team</a>
                    </li>
                    <li class="mb-2">
                        <a href="#"
                           class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Locations</a>
                    </li>
                    <li class="mb-2">
                        <a href="#"
                           class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Privacy</a>
                    </li>
                    <li class="mb-2">
                        <a href="#"
                           class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Terms</a>
                    </li>
                </ul>
            </div>
            <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0">
                <h5 class="text-xl font-bold mb-6">Conntact Us</h5>
                <ul class="list-none footer-links">
                    <li class="mb-2">
                        <a href="#"
                           class="border-b border-solid border-transparent">
                            123 6th St. Melbourne, FL 32904</a>
                    </li>
                    <li class="mb-2">
                        <a href="#"
                           class="border-b border-solid border-transparent">+659874123, +659874124</a>
                    </li>
                    <li class="mb-2">
                        <a href="#"
                           class="border-b border-solid border-transparent">yourname@email.com</a>
                    </li>
                </ul>
            </div>
            <div class="px-4 mt-4 sm:w-1/3 xl:w-1/6 sm:mx-auto xl:mt-0 xl:ml-auto">
                <h5 class="text-xl font-bold mb-6 sm:text-center xl:text-left">Stay connected</h5>
                <div class="flex sm:justify-center xl:justify-start">
                    <a href=""
                       class="w-8 h-8 border border-2 border-gray-400 rounded-full text-center py-1 text-gray-600 hover:text-white hover:bg-blue-600 hover:border-blue-600">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href=""
                       class="w-8 h-8 border border-2 border-gray-400 rounded-full text-center py-1 ml-2 text-gray-600 hover:text-white hover:bg-blue-400 hover:border-blue-400">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href=""
                       class="w-8 h-8 border border-2 border-gray-400 rounded-full text-center py-1 ml-2 text-gray-600 hover:text-white hover:bg-red-600 hover:border-red-600">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
    var isExpanded = false;
    document.getElementById('toggleButton').addEventListener('click', function() {
        if (!isExpanded) {
            document.getElementById('content').style.height = 'auto';
            this.textContent = 'Collapse';
            isExpanded = true;
        } else {
            document.getElementById('content').style.height = '110px';
            this.textContent = 'Read More';
            isExpanded = false;
        }
    });
</script>
</body>
</html>
