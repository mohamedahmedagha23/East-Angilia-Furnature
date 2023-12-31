<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');

$products = 
'[
  {
    "product_category": "Bed",
    "product_name": "Dreamy",
    "product_id": "1",
    "product_cost": "8700 EP",
    "photo": "https://media.homecentre.com/i/homecentre/164933069-164933070-HC30092022_03-2100.jpg?fmt=auto&$quality-standard$&sm=c&$prodimg-d-sqr-pdp-2x$"
  },
  {
    "product_category": "Bed",
    "product_name": "Snooze",
    "product_id": "2",
    "product_cost": "7520 EP",
    "photo": "https://media.homecentre.com/i/homecentre/162857026-162857026-HC25102020_01-2100.jpg?fmt=auto&h=750&w=750&qlt=90&sm=c"
  },
  {
    "product_category": "Bed",
    "product_name": "Bliss",
    "product_id": "3",
    "product_cost": "8600 EP",
    "photo": "https://media.homecentre.com/i/homecentre/158599702-158599702-HCB731DEC16_01-2100.jpg?v=1&fmt=auto&h=750&w=750&qlt=90&sm=c"
  },
  {
    "product_category": "Bed",
    "product_name": "Cruise",
    "product_id": "4",
    "product_cost": "10200 EP",
    "photo": "https://media.homecentre.com/i/homecentre/158599702-158599702-HCB731DEC16_06-2100.jpg?v=1&fmt=auto&h=345&w=345&qlt=default&sm=c"
  },
  {
    "product_category": "Bed",
    "product_name": "Cozy",
    "product_id": "5",
    "product_cost": "5650 EP",
    "photo": "https://i5.walmartimages.com/seo/Twin-Over-Twin-Triple-Bunk-Bed-for-3-L-Shaped-Bunk-Bed-Frame-White_6a204bf6-a50b-4abb-9a29-3c29538bf0d4.a3ca0065f6a02ff60aa20dbe693c7b42.jpeg?odnHeight=640&odnWidth=640&odnBg=FFFFFF"
  },
  {
    "product_category": "Bed",
    "product_name": "Zzz",
    "product_id": "6",
    "product_cost": "9500 EP",
    "photo": "https://i5.walmartimages.com/seo/Full-Over-Bunk-Bed-Ladder-Two-Storage-Drawers-Solid-Wood-Frame-Full-Length-Guardrail-Handrail-Convertible-Kids-Girls-Boys-No-Box-Spring-Needed-Walnut_ca996e0e-9265-41fc-a90f-4f846a642300.17676c5f02a8d23036eb3d01ae82b390.jpeg?odnHeight=640&odnWidth=640&odnBg=FFFFFF"
  },
  {
    "product_category": "Bed",
    "product_name": "Nite",
    "product_id": "7",
    "product_cost": "9999 EP",
    "photo": "https://i5.walmartimages.com/seo/Full-Over-Bunk-Bed-Twin-Trundle-Wood-Frame-Safety-Rail-Ladder-Kids-Boys-Girls-Teens-Can-Convertible-2-Beds-No-Box-Spring-Needed-White_2f82cd26-5f87-4e5a-9efd-69f1c65d9ccb.24c5ccf10deb741dc59c63ce945f9d98.jpeg?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF"
  },
  {
    "product_category": "Bed",
    "product_name": "Rest",
    "product_id": "8",
    "product_cost": "12500 EP",
    "photo": "https://i5.walmartimages.com/seo/Allewie-Queen-Size-Upholstered-Platform-Bed-Frame-with-Wingback-and-Button-Tufted-Headboard-Dark-Grey_15b0be1f-c744-433a-9f41-470eec14fed3.989819e1f579a3f6bb5fd56bfc8d98df.jpeg?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF"
  },
  {
    "product_category": "Bed",
    "product_name": "Luna",
    "product_id": "9",
    "product_cost": "13200 EP",
    "photo": "https://i5.walmartimages.com/seo/Aiho-Full-Bed-Frame-with-Headboard-and-11-Under-Bed-Storage-Retro_b30d1903-938e-46ed-a27b-73d02e195817.e2d9bc9e0e9cb7ddee8ddcfc2182dd8a.jpeg?odnHeight=2000&odnWidth=2000&odnBg=FFFFFF"
  },
  {
    "product_category": "Bed",
    "product_name": "Slumber",
    "product_id": "10",
    "product_cost": "11400 EP",
    "photo": "https://i5.walmartimages.com/seo/Lofka-Queen-Bed-Frame-with-Upholstered-Headboard-and-Sturdy-Metal-Bed-Frame-Beige-Finish_ab70fc0e-06bd-4da7-becb-9ab5af6fc5a6.734ea6adfc39988b509042f052833d3b.jpeg?odnHeight=640&odnWidth=640&odnBg=FFFFFF"
  },
  {
    "product_category": "Bed",
    "product_name": "Croo",
    "product_id": "11",
    "product_cost": "10500 EP",
    "photo": "https://i5.walmartimages.com/seo/VENI-6-Modern-Durable-Metal-Platform-Bed-with-Wood-Slat-Support-Mattress-Foundation-Child-and-Adult-King_0573295f-8ddf-45f8-9729-64493b2b6cad.f124dca6e100ae24284b59f6a5bc551a.jpeg?odnHeight=186&odnWidth=186&odnBg=FFFFFF"
  },
  {
    "product_category": "Bed",
    "product_name": "Zen",
    "product_id": "12",
    "product_cost": "10500 EP",
    "photo": "https://i5.walmartimages.com/seo/Amolife-Full-Size-Metal-Bed-Frame-with-Upholstered-Headboard-Dark-Grey_3fbe14d3-56b5-477b-a795-d5eb7956e4be.1e751764f5f0d4e520958735204d0e17.jpeg?odnHeight=372&odnWidth=372&odnBg=FFFFFF"
  },
  {
    "product_category": "Bed",
    "product_name": "Sleepy",
    "product_id": "13",
    "product_cost": "13500 EP",
    "photo": "https://i5.walmartimages.com/seo/Homfa-Full-Size-Bed-Frame-Linen-Upholstered-Platform-Bed-with-Button-Tufted-Adjustable-Headboard-for-Bedroom-Beige_934fa909-78c8-45a5-87cb-1ed6c332e571.acf7435ccb85f1abc1f5f9079b01ab3f.jpeg?odnHeight=372&odnWidth=372&odnBg=FFFFFF"
  },
  {
    "product_category": "Bed",
    "product_name": "Cloud",
    "product_id": "14",
    "product_cost": "12800 EP",
    "photo": "https://i5.walmartimages.com/seo/Homfa-Full-Size-4-Drawers-Storage-Bed-Frame-Round-Metal-Tube-Platform-Bed-with-Tufted-Upholstered-Headboard-Gold-and-Beige_a80f1261-3445-4984-8e96-7c29c2a3f83d.7cb1e56608c9e573feb3f8fde2c43fca.png?odnHeight=784&odnWidth=580&odnBg=FFFFFF"
  },
  {
    "product_category": "Bed",
    "product_name": "preee",
    "product_id": "15",
    "product_cost": "13200 EP",
    "photo": "https://i5.walmartimages.com/seo/Crown-Mark-Florence-Gray-Upholstered-Panel-Bed-Full-size_07d50709-84f0-4457-a693-8abf95be2a62.f157a01d220578db41fe179f320fa0f5.jpeg?odnHeight=640&odnWidth=640&odnBg=FFFFFF"
  },
  {
    "product_category": "Bed",
    "product_name": "Nap",
    "product_id": "16",
    "product_cost": "17600 EP",
    "photo": "https://i5.walmartimages.com/seo/EUROCO-Upholstery-Queen-Size-Platform-Bed-with-4-Drawers-for-Living-Room-Beige_e032f80f-598c-40e9-a1d6-fa9a005ca842.4f1a5f40144b1866423c2ec028c9356e.jpeg?odnHeight=392&odnWidth=290&odnBg=FFFFFF"
  },
  {
    "product_category": "Bed",
    "product_name": "Duvet",
    "product_id": "17",
    "product_cost": "14000 EP",
    "photo": "https://imageresizer.furnituredealer.net/img/remote/images.furnituredealer.net/img/products/signature_design_by_ashley/color/trinell%20-%201195589344_b446-65%2b84%2b50%2bb100-12-b1.jpg?format=webp&quality=85&width=1248&height=1248&scale=both&trim.threshold=20&trim.percentpadding=0.5"
  },
  {
    "product_category": "Bed",
    "product_name": "Snoozy",
    "product_id": "18",
    "product_cost": "12500 EP",
    "photo": "https://imageresizer.furnituredealer.net/img/remote/images.furnituredealer.net/img/products/crown_mark/color/emily_b4265-q-hbfb%2brail%2bdrw-l%2bdrw-r-b3.jpg?format=webp&quality=85&width=450&height=450&scale=both&trim.threshold=20"
  },
  {
    "product_category": "Bed",
    "product_name": "Dream",
    "product_id": "19",
    "product_cost": "11200 EP",
    "photo": "https://imageresizer.furnituredealer.net/img/remote/images.furnituredealer.net/b/p/a1e18853-5f6b-4575-b42b-6c376b416583/assets/e24a63a543f24c04ab24675f910d7fb5.jpg?format=webp&quality=85&width=450&height=450&scale=both&trim.threshold=20"
  },
  {
    "product_category": "Bed",
    "product_name": "Comfy",
    "product_id": "20",
    "product_cost": "9800 EP",
    "photo": "https://media.homecentre.com/i/homecentre/165660196-165660196-HC13072023_01-2100.jpg?fmt=auto&$quality-standard$&sm=c&$prodimg-d-sqr-pdp-2x$"
  },
  {
    "product_category": "Bed",
    "product_name": "Royal",
    "product_id": "21",
    "product_cost": "13500 EP",
    "photo": "https://imageresizer.furnituredealer.net/img/remote/images.furnituredealer.net/b/p/a1e18853-5f6b-4575-b42b-6c376b416583/assets/d0b045255c18487891b91764f05591ae.jpg?format=webp&quality=85&width=450&height=450&scale=both&trim.threshold=20"
  },
  {
    "product_category": "Bed",
    "product_name": "Nighty",
    "product_id": "22",
    "product_cost": "13500 EP",
    "photo": "https://imageresizer.furnituredealer.net/img/remote/images.furnituredealer.net/img/products/furniture_of_america/color/marlee--705881900_cm7651wh-f-bed-b1.jpg?format=webp&quality=85&width=450&height=450&scale=both&trim.threshold=20"
  },
  {
    "product_category": "Bed",
    "product_name": "Relax",
    "product_id": "23",
    "product_cost": "15600 EP",
    "photo": "https://imageresizer.furnituredealer.net/img/remote/images.furnituredealer.net/b/p/9ff4462755d52416828c778c4017329b/assets/ef1c023a09ce4d65b4f489cbd881b39d.jpg?format=webp&quality=85&width=450&height=450&scale=both&trim.threshold=20"
  },
  {
    "product_category": "Bed",
    "product_name": "Lull",
    "product_id": "24",
    "product_cost": "11500 EP",
    "photo": "https://imageresizer.furnituredealer.net/img/remote/images.furnituredealer.net/img/products%2fsunny_designs%2fcolor%2fsante%20fe-%20dc_2334dc-sek-b1.jpg?format=webp&quality=85&width=450&height=450&scale=both&trim.threshold=20"
  },
  {
    "product_category": "Bed",
    "product_name": "Zara",
    "product_id": "25",
    "product_cost": "21000 EP",
    "photo": "https://smhttp-ssl-77687.nexcesscdn.net/media/catalog/product/B/B/BB6-338-833-900-bed-lp-yth-1.jpg"
  },
  {
    "product_category": "Dining table",
    "product_name": "Dine",
    "product_id": "26",
    "product_cost": "3600 EP",
    "photo": "https://th.bing.com/th/id/OIP.f6tzbflq5qkdjGLjRwHFoAHaEa?pid=ImgDet&w=156&h=92&c=7"
  },
  {
    "product_category": "Dining table",
    "product_name": "Feast",
    "product_id": "27",
    "product_cost": "6480 EP",
    "photo": "https://th.bing.com/th/id/OIP.f3jsf3PDb414ZYnO_s1ddgHaFo?pid=ImgDet&w=156&h=118&c=7"
  },
  {
    "product_category": "Dining table",
    "product_name": "Elegance",
    "product_id": "28",
    "product_cost": "7200 EP",
    "photo": "https://imageresizer.furnituredealer.net/img/remote/images.furnituredealer.net/img/products/acme_furniture/color/chateau%20de%20ville_64065-b1.jpg?format=webp&quality=85&width=450&height=450&scale=both&trim.threshold=20"
  },
  {
    "product_category": "Dining table",
    "product_name": "Gather",
    "product_id": "29",
    "product_cost": "7200 EP",
    "photo": "https://imageresizer.furnituredealer.net/img/remote/images.furnituredealer.net/img/products/crown_mark/color/kiera_2150t-44108-leg%2btop-b0.jpg?format=webp&quality=85&width=1248&height=1248&scale=both&trim.threshold=20&trim.percentpadding=0.5"
  },
  {
    "product_category": "Dining table",
    "product_name": "Harmony",
    "product_id": "30",
    "product_cost": "8500 EP",
    "photo": "https://imageresizer.furnituredealer.net/img/remote/images.furnituredealer.net/img/products%2ffurniture_of_america%2fcolor%2felfredo_cm3755rt-buto6ajrkf0iukgms083z-q.jpg?format=webp&quality=85&width=450&height=450&scale=both&trim.threshold=20"
  },
  {
    "product_category": "Dining table",
    "product_name": "Flair",
    "product_id": "31",
    "product_cost": "6820 EP",
    "photo": "https://imageresizer.furnituredealer.net/img/remote/images.furnituredealer.net/img/products/crown_mark/color/bardstown_2752t-4278-b.jpg?format=webp&quality=85&width=450&height=450&scale=both&trim.threshold=20"
  },
  {
    "product_category": "Dining table",
    "product_name": "Grace",
    "product_id": "32",
    "product_cost": "5300 EP",
    "photo": "https://imageresizer.furnituredealer.net/img/remote/images.furnituredealer.net/img/products/homelegance/color/wieland_5614-72-b3.jpg?scale=both&width=450&height=450&format=webp&quality=85"
  },
  {
    "product_category": "Dining table",
    "product_name": "Nourish",
    "product_id": "33",
    "product_cost": "6400 EP",
    "photo": "https://imageresizer.furnituredealer.net/img/remote/images.furnituredealer.net/img/products%2ffurniture_of_america%2fcolor%2forla--705881900_cm3726t-table-b3.jpg?format=webp&quality=85&width=450&height=450&scale=both&trim.threshold=20"
  },
  {
    "product_category": "Dining table",
    "product_name": "Essence",
    "product_id": "34",
    "product_cost": "8400 EP",
    "photo": "https://www.homesdirect365.co.uk/images/cookham-round-extending-dining-table-oak-p60225-85046_zoom.jpg"
  },
  {
    "product_category": "Dining table",
    "product_name": "Delight",
    "product_id": "35",
    "product_cost": "7600 EP",
    "photo": "https://www.homesdirect365.co.uk/images/departments/1665157323-31027600.jpg"
  },
  {
    "product_category": "Dining table",
    "product_name": "Classic",
    "product_id": "36",
    "product_cost": "5600 EP",
    "photo": "https://images.pexels.com/photos/3144581/pexels-photo-3144581.jpeg?auto=compress&cs=tinysrgb&w=600"
  },
  {
    "product_category": "Dining table",
    "product_name": "Fusion",
    "product_id": "37",
    "product_cost": "7600 EP",
    "photo": "https://images.pexels.com/photos/1813502/pexels-photo-1813502.jpeg?auto=compress&cs=tinysrgb&w=600"
  },
  {
    "product_category": "Dining table",
    "product_name": "Bliss",
    "product_id": "38",
    "product_cost": "9020 EP",
    "photo": "https://images.pexels.com/photos/2995012/pexels-photo-2995012.jpeg?auto=compress&cs=tinysrgb&w=600"
  },
  {
    "product_category": "Dining table",
    "product_name": "Charm",
    "product_id": "39",
    "product_cost": "7800 EP",
    "photo": "https://images.pexels.com/photos/3356416/pexels-photo-3356416.jpeg?auto=compress&cs=tinysrgb&w=600"
  },
  {
    "product_category": "Dining table",
    "product_name": "Zenith",
    "product_id": "40",
    "product_cost": "6900 EP",
    "photo": "https://images.pexels.com/photos/1080696/pexels-photo-1080696.jpeg?auto=compress&cs=tinysrgb&w=600"
  },
  {
    "product_category": "Dining table",
    "product_name": "Savour",
    "product_id": "41",
    "product_cost": "8600 EP",
    "photo": "https://images.pexels.com/photos/2451264/pexels-photo-2451264.jpeg?auto=compress&cs=tinysrgb&w=600"
  },
  {
    "product_category": "Dining table",
    "product_name": "Serenity",
    "product_id": "42",
    "product_cost": "6300 EP",
    "photo": "https://images.pexels.com/photos/1008692/pexels-photo-1008692.jpeg?auto=compress&cs=tinysrgb&w=600"
  },
  {
    "product_category": "Dining table",
    "product_name": "Spark",
    "product_id": "43",
    "product_cost": "4999 EP",
    "photo": "https://images.pexels.com/photos/932095/pexels-photo-932095.jpeg?auto=compress&cs=tinysrgb&w=600"
  },
  {
    "product_category": "Dining table",
    "product_name": "Splendor",
    "product_id": "44",
    "product_cost": "11200 EP",
    "photo": "https://images.pexels.com/photos/2343470/pexels-photo-2343470.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Dining table",
    "product_name": "Zest",
    "product_id": "45",
    "product_cost": "9800 EP",
    "photo": "https://images.pexels.com/photos/373548/pexels-photo-373548.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Dining table",
    "product_name": "Rhythm",
    "product_id": "46",
    "product_cost": "5890 EP",
    "photo": "https://images.pexels.com/photos/4221399/pexels-photo-4221399.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Dining table",
    "product_name": "Aura",
    "product_id": "47",
    "product_cost": "9200 EP",
    "photo": "https://images.pexels.com/photos/13469732/pexels-photo-13469732.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Dining table",
    "product_name": "Relax",
    "product_id": "48",
    "product_cost": "15600 EP",
    "photo": "https://images.pexels.com/photos/4076473/pexels-photo-4076473.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Dining table",
    "product_name": "straightforward",
    "product_id": "49",
    "product_cost": "11500 EP",
    "photo": "https://images.pexels.com/photos/8583533/pexels-photo-8583533.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Dining table",
    "product_name": "conveys",
    "product_id": "50",
    "product_cost": "9999 EP",
    "photo": "https://images.pexels.com/photos/5587943/pexels-photo-5587943.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Office",
    "product_name": "simple",
    "product_id": "51",
    "product_cost": "8700 EP",
    "photo": "https://media.istockphoto.com/id/115709135/photo/armchair-of-director.jpg?s=612x612&w=0&k=20&c=LZUrJxsgu1O4zzwoe07_c_wZDuIJ-wKiZdbXMqy07Ug="
  },
  {
    "product_category": "Office",
    "product_name": "evokes",
    "product_id": "52",
    "product_cost": "10620 EP",
    "photo": "https://media.istockphoto.com/id/162245666/photo/new-monitor-on-a-desk.jpg?s=612x612&w=0&k=20&c=nqbdmhLXnXKj10Dm3m1uZJpbBGvIqR06_e5xM4tUcTI="
  },
  {
    "product_category": "Office",
    "product_name": "Elegance",
    "product_id": "53",
    "product_cost": "16400 EP",
    "photo": "https://th.bing.com/th/id/OIP.2uH-LXrZUYz7WdKvFm7ejwHaLG?pid=ImgDet&w=156&h=234&c=7"
  },
  {
    "product_category": "Office",
    "product_name": "warm",
    "product_id": "54",
    "product_cost": "11650 EP",
    "photo": "https://media.istockphoto.com/id/109166127/photo/computer-on-a-desk.jpg?s=612x612&w=0&k=20&c=RoFhhxc7iDd8Ieqqe3aKWoSOForfx8eWBvb5a0igJM0="
  },
  {
    "product_category": "Office",
    "product_name": "chic",
    "product_id": "55",
    "product_cost": "14800 EP",
    "photo": "https://media.istockphoto.com/id/114286707/photo/armchair-of-director.jpg?s=612x612&w=0&k=20&c=8ULTtZyOaH7xHeiBRKAxl_6eYekHTkLK0dV-BxQQYu4="
  },
  {
    "product_category": "Office",
    "product_name": "smooth",
    "product_id": "56",
    "product_cost": "14850 EP",
    "photo": "https://media.istockphoto.com/id/162245666/photo/new-monitor-on-a-desk.jpg?s=612x612&w=0&k=20&c=nqbdmhLXnXKj10Dm3m1uZJpbBGvIqR06_e5xM4tUcTI="
  },
  {
    "product_category": "Office",
    "product_name": "sense",
    "product_id": "57",
    "product_cost": "15000 EP",
    "photo": "https://media.istockphoto.com/id/1338518943/photo/office-desks-with-computers-computer-study-room-call-center-technology-education.jpg?s=612x612&w=0&k=20&c=HfKAmhE8Ug6-CLo6RzOq5sbiyX5NujDSi4aE7n6omDU="
  },
  {
    "product_category": "Office",
    "product_name": "reflects",
    "product_id": "58",
    "product_cost": "25200 EP",
    "photo": "https://media.istockphoto.com/id/91654120/photo/armchair-of-director.jpg?s=612x612&w=0&k=20&c=9-AAEuf90i0r8avwlxsRDUupRejDOvvLtYcw2f0qD9U="
  },
  {
    "product_category": "Office",
    "product_name": "trendy",
    "product_id": "59",
    "product_cost": "13200 EP",
    "photo": "https://media.istockphoto.com/id/1362512799/photo/light-grey-office-with-empty-wood-niche.jpg?s=612x612&w=0&k=20&c=kXDyMpJVnL9QQitcNXcf5M0PomRaxvqPG75ffg8JRSE="
  },
  {
    "product_category": "Office",
    "product_name": "Slumber",
    "product_id": "60",
    "product_cost": "11400 EP",
    "photo": "https://media.istockphoto.com/id/1327591418/photo/stylish-modern-wooden-desk-with-laptop-indoors-receptionist-workplace.jpg?s=612x612&w=0&k=20&c=vjdrEtZlvj0vXHPkfnI1FRZ2bJpewYmYLWKiUP-aOWg="
  },
  {
    "product_category": "Office",
    "product_name": "cool",
    "product_id": "61",
    "product_cost": "16520 EP",
    "photo": "https://media.istockphoto.com/id/125540279/photo/modern-style-of-office-furniture-with-green-office-chairs.jpg?s=612x612&w=0&k=20&c=P9T-KXXPjENTWsONjMRHCNiusualsZhoRJNm-s2GYeI="
  },
  {
    "product_category": "Office",
    "product_name": "flair",
    "product_id": "62",
    "product_cost": "10500 EP",
    "photo": "https://media.istockphoto.com/id/1294929059/photo/modern-office-interior.jpg?s=612x612&w=0&k=20&c=eQsMlNcW02KCrVpbzMjere79kBboHS4HdW1wo_E7D-M="
  },
  {
    "product_category": "Office",
    "product_name": "nourishment",
    "product_id": "63",
    "product_cost": "13500 EP",
    "photo": "https://media.istockphoto.com/id/153896360/photo/modern-office.jpg?s=612x612&w=0&k=20&c=SvULascjJ_3pnRvLQGAfw0V-B7iF6mq1qyv-G_TsEBc="
  },
  {
    "product_category": "Office",
    "product_name": "modern",
    "product_id": "64",
    "product_cost": "12800 EP",
    "photo": "https://media.istockphoto.com/id/660308184/photo/office-furniture.jpg?s=612x612&w=0&k=20&c=cpit92FP3F2EFHI3L2EZGzyox8nxONgN9Vq1-AkUbxU="
  },
  {
    "product_category": "Office",
    "product_name": "simplicity",
    "product_id": "65",
    "product_cost": "18500 EP",
    "photo": "https://media.istockphoto.com/id/93762300/photo/armchair-of-director.jpg?s=612x612&w=0&k=20&c=8cyYlddIZIX17BrhXwl-utka0uIzW5Y3snamJUf7HR0="
  },
  {
    "product_category": "Office",
    "product_name": "lively",
    "product_id": "66",
    "product_cost": "17600 EP",
    "photo": "https://media.istockphoto.com/id/184348397/photo/office-space.jpg?s=612x612&w=0&k=20&c=0PyGwrucDCHBuVMlK6RkBKGdSP0Jmb6Dvt9d2gNs7Zs="
  },
  {
    "product_category": "Office",
    "product_name": "straightforward",
    "product_id": "67",
    "product_cost": "14000 EP",
    "photo": "https://media.istockphoto.com/id/1791214163/photo/white-and-wooden-open-space-office.jpg?s=612x612&w=0&k=20&c=6SWDTJRMNT8kK3YCBLjYrrBV-TDWeh3hW9vbnZd8ryU="
  },
  {
    "product_category": "Office",
    "product_name": "Snoozy",
    "product_id": "68",
    "product_cost": "12500 EP",
    "photo": "https://media.istockphoto.com/id/119834374/photo/modern-office.jpg?s=612x612&w=0&k=20&c=ghhtQBbFHU2RFEZcREt2Yr4IdJkeTs060PJuLweib3o="
  },
  {
    "product_category": "Office",
    "product_name": "clever",
    "product_id": "69",
    "product_cost": "11200 EP",
    "photo": "https://media.istockphoto.com/id/178382379/photo/new-modern-office.jpg?s=612x612&w=0&k=20&c=FUQh6NA23KphiEYpIEUqgv1fNiLDxjEMLGmHh3_dWh0="
  },
  {
    "product_category": "Office",
    "product_name": "traditional",
    "product_id": "70",
    "product_cost": "9800 EP",
    "photo": "https://media.istockphoto.com/id/1047585940/photo/office-with-black-seats.jpg?s=612x612&w=0&k=20&c=wA13SRHviOrWgH3kdfjEuCKpXrOZQvUkyylHbQZKxHE="
  },
  {
    "product_category": "Office",
    "product_name": "Comfy",
    "product_id": "71",
    "product_cost": "13500 EP",
    "photo": "https://media.istockphoto.com/id/177122905/photo/monitors-on-the-desks.jpg?s=612x612&w=0&k=20&c=qcuqeEolD16WWmt-siVeVQIqCES_ZqdQ8wIJYAMR24U="
  },
  {
    "product_category": "Office",
    "product_name": "creative",
    "product_id": "72",
    "product_cost": "13500 EP",
    "photo": "https://media.istockphoto.com/id/522515563/photo/modern-office.jpg?s=612x612&w=0&k=20&c=C9yNXJNz5VUREo1YwldrZ6GaF5jfR1MTQ6AHYkP4NNM="
  },
  {
    "product_category": "Office",
    "product_name": "satisfaction",
    "product_id": "73",
    "product_cost": "15600 EP",
    "photo": "https://media.istockphoto.com/id/530758430/photo/3d-interior-rendering-of-an-office.jpg?s=612x612&w=0&k=20&c=i2t0N4MNtNq3EixEUZzsnY0ZkCq4PMRXjFA0-OMiB8w="
  },
  {
    "product_category": "Office",
    "product_name": "savouring",
    "product_id": "74",
    "product_cost": "11500 EP",
    "photo": "https://media.istockphoto.com/id/178519158/photo/monitors-on-a-desk.jpg?s=612x612&w=0&k=20&c=a_52_POt_Y6bc6COVjFedAFZGBekeyQ2BF4bnc5quik="
  },
  {
    "product_category": "Office",
    "product_name": "serenity",
    "product_id": "75",
    "product_cost": "21000 EP",
    "photo": "https://media.istockphoto.com/id/1035938508/photo/courtroom.jpg?s=612x612&w=0&k=20&c=U90AQ0fskXGB9hywCVAtr--6i5MIqYMwR-_dffIhPCU="
  },
  {
    "product_category": "Kitchen",
    "product_name": "Chef",
    "product_id": "76",
    "product_cost": "28700 EP",
    "photo": "https://images.pexels.com/photos/2062426/pexels-photo-2062426.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
  },
  {
    "product_category": "Kitchen",
    "product_name": "Spark",
    "product_id": "77",
    "product_cost": "27520 EP",
    "photo": "https://images.pexels.com/photos/3990599/pexels-photo-3990599.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Kitchen",
    "product_name": "classic",
    "product_id": "78",
    "product_cost": "25600 EP",
    "photo": "https://images.pexels.com/photos/10153052/pexels-photo-10153052.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Kitchen",
    "product_name": "energetic",
    "product_id": "79",
    "product_cost": "35600 EP",
    "photo": "https://images.pexels.com/photos/3847520/pexels-photo-3847520.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Kitchen",
    "product_name": "Hub",
    "product_id": "80",
    "product_cost": "31050 EP",
    "photo": "https://images.pexels.com/photos/8031909/pexels-photo-8031909.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Kitchen",
    "product_name": "warm",
    "product_id": "81",
    "product_cost": "29500 EP",
    "photo": "https://images.pexels.com/photos/6908563/pexels-photo-6908563.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Kitchen",
    "product_name": "Craft",
    "product_id": "82",
    "product_cost": "31500 EP",
    "photo": "https://images.pexels.com/photos/6835094/pexels-photo-6835094.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Kitchen",
    "product_name": "wisdom",
    "product_id": "83",
    "product_cost": "32500 EP",
    "photo": "https://images.pexels.com/photos/7195739/pexels-photo-7195739.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Kitchen",
    "product_name": "expertise",
    "product_id": "84",
    "product_cost": "41300 EP",
    "photo": "https://images.pexels.com/photos/3958951/pexels-photo-3958951.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Kitchen",
    "product_name": "Kitchen Zone",
    "product_id": "85",
    "product_cost": "41400 EP",
    "photo": "https://images.pexels.com/photos/7195851/pexels-photo-7195851.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Kitchen",
    "product_name": "Art",
    "product_id": "86",
    "product_cost": "35600 EP",
    "photo": "https://images.pexels.com/photos/19227212/pexels-photo-19227212/free-photo-of-view-of-a-modern-kitchen-with-black-and-wooden-cabinets.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Kitchen",
    "product_name": "Zen",
    "product_id": "87",
    "product_cost": "41500 EP",
    "photo": "https://images.pexels.com/photos/19227212/pexels-photo-19227212/free-photo-of-view-of-a-modern-kitchen-with-black-and-wooden-cabinets.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Kitchen",
    "product_name": "priority",
    "product_id": "88",
    "product_cost": "33500 EP",
    "photo": "https://images.pexels.com/photos/7061400/pexels-photo-7061400.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Kitchen",
    "product_name": "clever",
    "product_id": "89",
    "product_cost": "42800 EP",
    "photo": "https://images.pexels.com/photos/15062093/pexels-photo-15062093/free-photo-of-wooden-cabinets-in-the-kitchen.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Kitchen",
    "product_name": "Fresh",
    "product_id": "90",
    "product_cost": "65600 EP",
    "photo": "https://images.pexels.com/photos/15062099/pexels-photo-15062099/free-photo-of-black-kitchen-appliances-on-brown-wooden-kitchen-cabinet.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Kitchen",
    "product_name": "Nap",
    "product_id": "91",
    "product_cost": "17600 EP",
    "photo": "https://images.pexels.com/photos/15062094/pexels-photo-15062094/free-photo-of-brown-wooden-kitchen-cabinets.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Kitchen",
    "product_name": "Pro",
    "product_id": "92",
    "product_cost": "44000 EP",
    "photo": "https://images.pexels.com/photos/4044792/pexels-photo-4044792.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Kitchen",
    "product_name": "confident",
    "product_id": "93",
    "product_cost": "62500 EP",
    "photo": "https://images.pexels.com/photos/4320382/pexels-photo-4320382.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Kitchen",
    "product_name": "Dream",
    "product_id": "94",
    "product_cost": "51200 EP",
    "photo": "https://images.pexels.com/photos/5698015/pexels-photo-5698015.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Kitchen",
    "product_name": "cheerful",
    "product_id": "95",
    "product_cost": "39800 EP",
    "photo": "https://images.pexels.com/photos/8031936/pexels-photo-8031936.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Kitchen",
    "product_name": "trendy",
    "product_id": "96",
    "product_cost": "53500 EP",
    "photo": "https://images.pexels.com/photos/7195855/pexels-photo-7195855.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Kitchen",
    "product_name": "affectionate",
    "product_id": "97",
    "product_cost": "33500 EP",
    "photo": "https://images.pexels.com/photos/7027855/pexels-photo-7027855.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Kitchen",
    "product_name": "inspiring",
    "product_id": "98",
    "product_cost": "65600 EP",
    "photo": "https://images.pexels.com/photos/7061393/pexels-photo-7061393.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Kitchen",
    "product_name": "Mix",
    "product_id": "99",
    "product_cost": "41500 EP",
    "photo": "https://images.pexels.com/photos/7533764/pexels-photo-7533764.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  },
  {
    "product_category": "Kitchen",
    "product_name": "catchy",
    "product_id": "100",
    "product_cost": "61000 EP",
    "photo": "https://images.pexels.com/photos/7061062/pexels-photo-7061062.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
  }
]';



echo $products;

?>
