
const flashcardsSet1 = [
    { question: "Question 1", answer: "Answer 1" },
    { question: "Question 2", answer: "Answer 2" },
];

const flashcardsSet2 = [
    { question: "Question A", answer: "Answer A" },
    { question: "Question B", answer: "Answer B" },
];

const flashcardsSet3 = [
    { question: "Question X", answer: "Answer X" },
    { question: "Question Y", answer: "Answer Y" },
];

let flashcards = flashcardsSet1;
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

  const flashcardSetSelect = document.getElementById("flashcard-set");

  flashcardSetSelect.addEventListener("change", function () {

      const selectedSet = flashcardSetSelect.value;
  
      loadFlashcards(selectedSet);
  });
  
  function loadFlashcards(setName) {
    const container = document.querySelector("#flashcards-container .container");
    container.innerHTML = "";
    
    switch (setName) {
      case "set1":
        flashcards = flashcardsSet1;
        break;
      case "set2":
        flashcards = flashcardsSet2;
        break;
      case "set3":
        flashcards = flashcardsSet3;
        break;
      default:
        flashcards = [];
    }
    currentCardIndex = 0;
    displayFlashcard(currentCardIndex);
  }
  


// Display the first flashcard initially
window.addEventListener("DOMContentLoaded", () => {
    loadFlashcards("set1");

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
  



