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
