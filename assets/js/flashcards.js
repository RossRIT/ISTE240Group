// Add your flashcard data here
// Replace this with your fetch_flashcards.php data once it is integrated
const flashcards = [
    { question: "Question 1", answer: "Answer 1" },
    { question: "Question 2", answer: "Answer 2" },
    { question: "Question 3", answer: "Answer 3" },
];

let currentCardIndex = 0;

// Function to display a flashcard
function displayFlashcard(index) {
    const flashcard = flashcards[index];
    const container = document.querySelector("#flashcards-container .container");
    container.innerHTML = `
        <div class="card">
            <div class="front">
                <p>${flashcard.question}</p>
            </div>
            <div class="back">
                <p>${flashcard.answer}</p>
            </div>
        </div>
    `;
}

// Display the first flashcard initially
displayFlashcard(currentCardIndex);

// Handle the arrow button clicks
document.getElementById("prev-card").addEventListener("click", () => {
    currentCardIndex = currentCardIndex > 0 ? currentCardIndex - 1 : flashcards.length - 1;
    displayFlashcard(currentCardIndex);
});

document.getElementById("next-card").addEventListener("click", () => {
    currentCardIndex = (currentCardIndex + 1) % flashcards.length;
    displayFlashcard(currentCardIndex);
});

const prevBtn = document.getElementById("prev-btn");
const nextBtn = document.getElementById("next-btn");
const flashcardsContainer = document.getElementById("flashcards-container");

prevBtn.addEventListener("click", () => {
    changeCard("left");
});

nextBtn.addEventListener("click", () => {
    changeCard("right");
});

function changeCard(direction) {
    const currentCard = flashcardsContainer.querySelector(".card");
    currentCard.classList.add(direction === "left" ? "swipe-left" : "swipe-right");
    setTimeout(() => {
       
        currentCard.style.display = "none"; 
        currentCard.classList.remove(direction === "left" ? "swipe-left" : "swipe-right");
        currentCard.style.display = "block";
    }, 300); 
}
