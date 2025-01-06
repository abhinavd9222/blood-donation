<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            height: 100vh;
            width: 100vw;
            box-sizing: border-box;
            overflow-x: hidden;
        }

        .main {
            height: auto;
            width: 100%;
        }

        

        .slides {
            display: flex;
        }

        .crasoul {
            /* position: absolute; */
        }

        .crasoul img {
            width: 98vw;
            height: 80vh;


        }

        .slide {
            display: none;
        }

        .active {
            display: block;

        }

        .next {
            width: 50px;
            height: 50px;
            position: relative;
            left: 90rem;
            top: -20rem;
            color: white;
            
            font-weight: bold;
            text-align: center;


        }

        .prev {
            width: 50px;
           
            height: 50px;
            position: relative;

            top: -23rem;
            color: white;
            font-weight: bold;
            text-align: center;

        }

        .container2 {
            height: 60vh;
            width: 100vw;
          

        }

        .cards {
            display: flex;
            gap: 50px;
            padding: 14px;
        }

        .card {
            height: 55vh;
            width: 30vw;
            background-color:rgb(250, 238, 234);
            border-top-right-radius: 50px 50px;
            border-bottom-left-radius: 50px 50px ;
            text-align: center;
            box-shadow: 2px 2px 2px 2px;

        }
li{
    font-weight: bold;
    font-size: 15px;
    text-align: start;
    margin-top: 5pxpx;
    padding: 10px;
}
    
    </style>
</head>

<body>

    <div class="main">
       <?php include './nav.php';?>
       

        <div class="crasoul">
            <div class="slides">
                <div class="slide active"><img
                        src="https://sanguina.com/cdn/shop/articles/BloodDonationHealth_Blog.jpg?crop=center&height=1155&v=1717769981&width=1540"
                        alt=""></div>
                <div class="slide"><img
                        src="https://st3.depositphotos.com/1003924/35965/i/600/depositphotos_359656708-stock-photo-concept-charity-love-donate-helping.jpg"
                        alt=""></div>
                <div class="slide"><img
                        src="https://st2.depositphotos.com/1518767/8188/i/450/depositphotos_81889102-stock-photo-blood-donation-against-white.jpg"
                        alt="">
                </div>
                <div class="slide"><img src="https://t3.ftcdn.net/jpg/01/37/30/90/360_F_137309034_4oK5BoYqUc7sUoNor1ltGW0PAYNzExK9.jpg"
                        alt="">
                </div>
            </div>
            <div class="next">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                  </svg>
                  
            </div>
            <div class="prev">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                  </svg>
                   </div>
            </div>
        </div>
        <div class="container2">
            <div class="cards">
                <div class="card">
                    <h1>Benefits</h1>
                    <ul>
                        <li>reduce stress</li>
                        <li>improve your emotional well-being</li>
                        <li>benefit your physical health</li>
                        <li>help get rid of negative feelings</li>
                        <li>provide a sense of belonging and reduce isolation</li>
                        <li>You have arm pain, numbness, or tingling.</li>
                        <li>You develop a raised bump or continue bleeding at the needle site.</li>
                    </ul>
                </div>
                <div class="card">
                    <h1>Who can give blood</h1>
                    <ul>
                        <li>You are aged between 18 and 65.</li>
                        <li>You weigh at least 50 kg.</li>
                        <li>In some countries, donors of whole blood donations should weigh at least 45 kg to donate 350 ml ± 10% .</li>
                        <li>* In some countries, regular donors over the age of 65 may be accepted at the discretion of the responsible physician. The upper age limit in some countries are 60.</li>
                        <li>* In some countries national legislation permits 16–17 year-olds to donate provided that they fulfil the physical and hematological criteria required and that appropriate consent is obtained</li>
                    </ul>
                </div>
                <div class="card">
                    <h1>Refreshment and Recovery</h1>
                    <ul>
                        <li>
                            After donating, you’ll have a snack and something to drink in the refreshment area
                        </li>
                        <li>
                            You’ll leave after approximately 15 minutes and continue your normal routine.
                        </li>
                        <li>
                            Enjoy the feeling of accomplishment knowing you are helping to save lives
                        </li>
                        <li>
                            Take a selfie, or simply share your good deed with friends. It may inspire them to become blood donors.
                        </li>
                        <li>
                            When your donation is complete, a staff person will place a bandage on your arm and provide post donation instructions
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <?php  include './footer.php'; ?>
    </div>

</body>

<script>
    const slide = document.querySelectorAll('.slide');
    const next = document.querySelector('.next');
    const prev = document.querySelector('.prev');
    let index = 0;
    next.addEventListener('click', function () {
        slide[index].classList.remove('active');
        if (index == (slide.length - 1)) {
            index = 0;
        } else {
            index = index + 1;
        }


        slide[index].classList.add('active')

    })

    prev.addEventListener('click', function () {
        slide[index].classList.remove('active');
        if (index <= 0) {
            index = (slide.length - 1);
        }
        else {
            index = index - 1;
        }


        slide[index].classList.add('active');

    });

    function nextfun() {
        slide[index].classList.remove('active');
        if (index == (slide.length - 1)) {
            index = 0;
        } else {
            index = index + 1;
        }


        slide[index].classList.add('active')
    }
    setInterval(nextfun, 1000);

</script>

</html>