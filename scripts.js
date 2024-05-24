const typingLine = document.querySelector('.typing-line');
const competencias = [
  'React JS',
  'Angular JS',
  'Vue JS',
  'Node Js',
  'Bootstrap',
  'Tailwind',
  'Figma',
  'HTML | CSS',
  'SQL',
  'SEO',
  'UX | UI',
  'WordPress',
];
let index = 0;
let textIndex = 0;

function type() {
  const currentText = competencias[textIndex];
  typingLine.textContent = currentText.slice(0, index);
  index++;
  if (index > currentText.length) {
    index = 0;
    textIndex++;
    if (textIndex >= competencias.length) {
      textIndex = 0;
    }
  }
}

setInterval(type, 260);
