// Add your flashcard data here
// Replace this with your fetch_flashcards.php data once it is integrated
const flashcards = [
    { question: "Question test", answer: "Answer 1" },
    { question: "Question 2", answer: "Answer 2" },
    { question: "Question 3", answer: "Answer 3" },
];

let currentCardIndex = 0;

// Function to display a flashcard
function displayFlashcard(index) {
    const flashcard = flashcards[index];
    const container = document.querySelector("#flashcards-container .container");
  
    // Hide all cards
    const cards = container.querySelectorAll(".card");
    cards.forEach((card) => {
      card.classList.add("card-hidden");
    });
  
    // Check if the card already exists, if not, create and append it
    let newCard = cards[index];
    if (!newCard) {
      newCard = document.createElement("div");
      newCard.classList.add("card");
      newCard.innerHTML = `
        <div class="front">
          <p>${flashcard.question}</p>
        </div>
        <div class="back">
          <p>${flashcard.answer}</p>
        </div>
      `;
      container.appendChild(newCard);
    }
  
    // Show the current card
    newCard.classList.remove("card-hidden");
  }
  displayFlashcard(currentCardIndex);



// Display the first flashcard initially
window.addEventListener("DOMContentLoaded", () => {
    displayFlashcard(currentCardIndex);
  });
  
 
const prevBtn = document.getElementById("prev-btn");
const nextBtn = document.getElementById("next-btn");
const flashcardsContainer = document.getElementById("flashcards-container");

document.getElementById("prev-card").addEventListener("click", () => {
    changeCard("left");
});

document.getElementById("next-card").addEventListener("click", () => {
    changeCard("right");
});

function changeCard(direction) {
    const currentCard = flashcardsContainer.querySelector(".card");
    const animationClass = direction === "left" ? "swipe-left" : "swipe-right";
    currentCard.classList.add(animationClass);
  
    if (direction === "left") {
      currentCardIndex = (currentCardIndex - 1 + flashcards.length) % flashcards.length;
    } else {
      currentCardIndex = (currentCardIndex + 1) % flashcards.length;
    }
  
    currentCard.addEventListener("animationend", () => {
      currentCard.remove();
      displayFlashcard(currentCardIndex);
    });
  }
  



