// Get the button and text to speak elements from the HTML
const speakButton = document.getElementById('speakButton');
const pauseButton = document.getElementById('pauseButton');
const textToSpeak = document.getElementById('textToSpeak');
const resumeButton = document.getElementById('resumeBuutton');

// Create a new speech synthesis object
const speechSynthesis = window.speechSynthesis;
function readContent(){
    // Get the text from the text to speak element
  const text = textToSpeak.innerText;

  // Create a new speech synthesis utterance object
  const utterance = new SpeechSynthesisUtterance(text);

  // Set the voice and language
  utterance.voice = speechSynthesis.getVoices()[0]; // Use the first voice
  utterance.lang = 'en-US'; // Set the language to US English

  // Speak the text
  speechSynthesis.speak(utterance);
}

// When the button is clicked, speak the text
speakButton.addEventListener('click', () => {
  readContent();
  $('#speakButton').hide();
  $('#pauseButton').show();
  $('#resumeButton').hide();
});
// When the resume button is clicked, speak the text
// resumeButton.addEventListener('click', () => {
    // speechSynthesis.resume();
// });
$('#resumeButton').click(function(){
    speechSynthesis.resume();
    readContent();
    $('#speakButton').hide();
    $('#pauseButton').show();
    $('#resumeButton').hide();
});

// When the pause button is clicked, speak the text
pauseButton.addEventListener('click', () => {
    speechSynthesis.pause();
    $('#speakButton').hide();
    $('#pauseButton').hide();
    $('#resumeButton').show();
});

$(document).ready(function(){
    $('#speakButton').show();
    $('#pauseButton').hide();
    $('#resumeButton').hide();
});


