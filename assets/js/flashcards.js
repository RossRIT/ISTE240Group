let currentCardIndex = 0;
let flashcardsBySet = {};
let flashcards;

function updateCardClasses() {
  const container = document.querySelector("#flashcards-container .container");
  const cards = container.querySelectorAll(".card");

  cards.forEach((card, index) => {
    if (index === currentCardIndex) {
      card.classList.remove("card-hidden", "swipe-left", "swipe-right");
    } else {
      card.classList.add("card-hidden");
    }
  });

  const currentCard = container.querySelector(".card:not(.card-hidden)");
  currentCard.addEventListener("animationend", () => {
    currentCard.remove();
  });
}

function displayFlashcards(setName) {
  flashcards = flashcardsBySet[setName]; // Set the flashcards based on the selected set name
  const container = document.querySelector("#flashcards-container .container");

  const currentCard = container.querySelector(".card");
  if (currentCard) {
    currentCard.remove(); // Remove the old card before adding the new one
  }

  const newCard = document.createElement("div");
  newCard.classList.add("card");
  newCard.innerHTML = `
    <div class="front">
      <p>${flashcards[currentCardIndex].question}</p>
    </div>
    <div class="back">
      <p>${flashcards[currentCardIndex].answer}</p>
    </div>
  `;

  container.appendChild(newCard);

  // Add animationend event listener to the new card
  newCard.addEventListener("animationend", () => {
    newCard.classList.remove("swipe-left", "swipe-right");
  });
}


async function fetchAndDisplayFlashcards() {
  try {
    const response = await fetch('../assets/php/get_flashcards.php');
    if (response.ok) {
      const flashcardsData = await response.json();
      const tables = ["GettingStarted","Beginner","DirectoryFileMngmt", "Permissions", "pipingfilter","txtedit"];

      for (const table of tables) {
        flashcardsBySet[table] = flashcardsData.filter(flashcard => flashcard.table === table);
      }
      
      displayFlashcards("GettingStarted");
    } else {
      console.error('Failed to fetch flashcards:', response.status, response.statusText);
    }
  } catch (error) {
    console.error('Error fetching flashcards:', error);
  }
}

const flashcardSetSelect = document.getElementById("flashcard-set");

flashcardSetSelect.addEventListener("change", function () {
  const selectedSet = flashcardSetSelect.value;
  currentCardIndex = 0;
  displayFlashcards(selectedSet);
});
  
// Display the first flashcard initially
window.addEventListener("DOMContentLoaded", () => {
    fetchAndDisplayFlashcards();
    displayFlashcards(currentCardIndex);
  });
  
const flashcardsContainer = document.getElementById("flashcards-container");

document.getElementById("prev-card").addEventListener("click", () => {
    changeCard("left");
});

document.getElementById("next-card").addEventListener("click", () => {
    changeCard("right");
});

function changeCard(direction) {
  const setName = flashcardSetSelect.value;
  const flashcards = flashcardsBySet[setName];
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
    displayFlashcards(setName); // Call displayFlashcards with updated currentCardIndex value
  });
}

