//同樣的元素選起來外，還會以陣列的方式被傳回
const text = document.querySelectorAll(".thePaths");

for (let i = 0; i < text.length; i++) {
  console.log(`text number ${i} length is ${text[i].getTotalLength()}`);
}

const lastWord = document.querySelector("#twelfth");
const animation = document.querySelector("div.animation");
//animationend - CSS 动画完成后触发
lastWord.addEventListener("animationend",() => {
    animation.style = "transition: all 7s ease ; opacity: 0 ; pointer-events: none ";
})