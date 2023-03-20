<!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Faq JavaScript</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
 </head>

 <body class='main-wrapper'>
     <div>
         <?php require 'nav1.php'; ?>
     </div>
     <div class="main-container">

         <h1 class="title text-center">
             Frequenty Asked Questions
         </h1>

         <div class="faq-img">
             <img src="images/faq.png" style=" margin-left:50px;     margin-bottom: 56px;
" height=410px width=200px alt="" class="accordion-img">
             <div class="question-answer-wrapper">

                 <div class="content-accordion">
                     <div class="question-answer">
                         <div class="question">
                             <h3 class="title-question">
                                 Why are my houseplants getting brown tips on their leaves?
                             </h3>
                             <button class="question-btn">
                                 <span class="up-icon">
                                     <i class="fas fa-chevron-up"></i>
                                 </span>
                                 <span class="down-icon">
                                     <i class="fas fa-chevron-down"></i>
                                 </span>
                             </button>
                         </div>
                         <div class="answer">
                             <p>This is generally an indication of poor watering habits. The best way to water your
                                 online
                                 plant is to thoroughly flush it until water runs freely out the drainage holes.
                             </p>
                         </div>
                     </div>
                     <div class="question-answer">
                         <div class="question">
                             <h3 class="title-question">
                                 How do I use the self-watering pot?
                             </h3>
                             <button class="question-btn">
                                 <span class="up-icon">
                                     <i class="fas fa-chevron-up"></i>
                                 </span>
                                 <span class="down-icon">
                                     <i class="fas fa-chevron-down"></i>
                                 </span>
                             </button>
                         </div>
                         <div class="answer">
                             <p>Water as you usually water from the top. In the case of the Self Watering Planters,
                                 excess water will get stored in the reservoir below, the soil then
                                 absorbs
                                 water when required.</p>
                         </div>
                     </div>
                     <div class="question-answer">
                         <div class="question">
                             <h3 class="title-question">
                                 Why is my plant not growing? / How do I boost my plant's growth?
                             </h3>
                             <button class="question-btn">
                                 <span class="up-icon">
                                     <i class="fas fa-chevron-up"></i>
                                 </span>
                                 <span class="down-icon">
                                     <i class="fas fa-chevron-down"></i>
                                 </span>
                             </button>
                         </div>
                         <div class="answer">
                             <p>You can use an organic fertilizer like seaweed extract or cow manure
                                 every two
                                 weeks to boost the growth of the plant.</p>
                         </div>
                     </div>
                     <div class="question-answer">
                         <div class="question">
                             <h3 class="title-question">
                                 How do I take care of succulents?
                             </h3>
                             <button class="question-btn">
                                 <span class="up-icon">
                                     <i class="fas fa-chevron-up"></i>
                                 </span>
                                 <span class="down-icon">
                                     <i class="fas fa-chevron-down"></i>
                                 </span>
                             </button>
                         </div>
                         <div class="answer">
                             <p>Make sure your succulents from an online nursery get enough light. Water according to
                                 the
                                 season and most importantly avoid overwatering as succulents are hardy plants.</p>
                         </div>
                     </div>
                     <div class="question-answer">
                         <div class="question">
                             <h3 class="title-question">
                                 Why is my plant not flowering?
                             </h3>
                             <button class="question-btn">
                                 <span class="up-icon">
                                     <i class="fas fa-chevron-up"></i>
                                 </span>
                                 <span class="down-icon">
                                     <i class="fas fa-chevron-down"></i>
                                 </span>
                             </button>
                         </div>
                         <div class="answer">
                             <p> Use rich soil. Soil that is light and rich in compost or manure provides plenty of
                                 nutrients
                                 constantly to the plants.</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <section class="desc">
             <h2 class="product-desc"> If you love to garden and have gardening queries like above, consider
                 consulting with a plant doctor. Like medical doctors, these professionals can help diagnose disease
                 and prescribe formulas to help restore health in a living thing. Only plant doctors focus on the
                 ficus and other leafy greens in and around your home and garden. Solve all your gardening queries
                 with the help of Infinite Green's plant and gardening experts. Get personalized gardening help and
                 guidance to know the best plant fits for your home, get solutions to plant problems, grow your own
                 vegetables, or understand plant care for a thriving indoor garden!</h2>
         </section>
         <div class='btn-wrapper'>
             <button onclick="window.location.href='doctor.php';" class="button-53" role="button">
                 Call Doctor Green
             </button>
         </div>

         <?php require 'footer.php'; ?>

         <script>
         const questions = document.querySelectorAll('.question-answer');
         questions.forEach(function(question) {
             const btn = question.querySelector('.question-btn');
             btn.addEventListener("click", function() {
                 questions.forEach(function(item) {
                     if (item !== question) {
                         item.classList.remove("show-text");
                     }
                 })
                 question.classList.toggle("show-text");
             })
         })
         </script>
 </body>



 <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

*,
*::before,
*::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.main-wrapper {
    display: flex;
    flex-direction: column;
}

.main-container {
    display: flex;
    flex-direction: column;
}

.faq-img {
    display: flex;
    justify-content: center;
}

.question-answer-wrapper {
    display: flex;
    flex-direction: column;
}

.button-53 {
    background-color: lavender;
    border: 0 solid #E5E7EB;
    box-sizing: border-box;
    color: #000000;
    font-size: 1rem;
    font-weight: 700;
    text-align: center;
    text-decoration: none #000000 solid;
    transform: rotate(-1deg);
    margin-left: 560px;

}

.button-53:focus {
    outline: 0;
}

.button-53:after {
    content: '';
    position: absolute;
    border: 1px solid #000000;
    bottom: 4px;
    left: 4px;
    width: calc(100% - 1px);
    height: calc(100% - 1px);
}

.button-53:hover:after {
    bottom: 2px;
    left: 2px;
}

@media (min-width: 768px) {
    .button-53 {
        padding: .75rem 3rem;
        font-size: 1.25rem;
    }
}

html {
    font-size: 12px;
}

.content-accordion {
    margin-top: 35px;
    margin-right: 50px;
}

.question-answer {
    width: 100%;
    margin-left: 120px;
    border-bottom: 1px solid #e8e8e8;
}

.question {
    display: flex;
    justify-content: space-between;
}

.accordion-img {
    position: relative;

}

.title-question {
    margin: 1.4rem 0rem;
    font-size: 1.2rem;
    font-weight: 500;
    color: #000;
}

.question-btn {
    font-size: 1.5rem;
    background: transparent;
    border-color: transparent;
    cursor: pointer;
}

.up-icon {
    display: none;
}

.answer {
    font-size: 1.2rem;
    line-height: 1.8;
    display: none;
}

.show-text .answer {
    display: block;
}

.show-text .up-icon {
    display: inline;
}

.show-text .down-icon {
    display: none;
}

@media screen and (min-width: 992px) {
    .accordion {
        width: 920px;
        height: 0;
        display: flex;
    }

    .accordion-img {
        position: relative;
        width: 420px;
        top: 88px;
    }

    .question-answer {
        width: 380px;
    }

    .content-accordion {
        margin-top: 85px;
    }

    .title {
        margin-top: 40px;
        margin-bottom: 0px;
        font-size: 3rem;
    }

    body {
        background-color: #e6ffe6;
    }
}

.product-desc {
    margin-top: 75px;
    padding: 0 10vw;
    font-size: 17px;
    margin-bottom: 20px;
    color: green;
    text-align: center;
}
 </style>

 </html>