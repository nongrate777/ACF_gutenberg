const accordionItems = document.querySelectorAll('.accordion__faq');

function toggleAccordion() {
    const content = this.nextElementSibling;
    const parent = this.parentElement;
    const subQuestions = parent.querySelectorAll('.accordion__question-sub');

    if (parent.classList.contains('active')) {
        parent.classList.remove('active');
        content.classList.remove('active');
        content.style.maxHeight = 0;
        subQuestions.forEach((subQuestion) => {
            subQuestion.classList.remove('active');
        });
    } else {
        accordionItems.forEach((item) => {
            item.classList.remove('active');
            item.querySelector('.content').style.maxHeight = 0;
            item.querySelectorAll('.accordion__question-sub').forEach((subQuestion) => {
                subQuestion.classList.remove('active');
            });
        });
        parent.classList.add('active');
        content.classList.add('active');
        content.style.maxHeight = content.scrollHeight + 'px';
        subQuestions.forEach((subQuestion) => {
            subQuestion.classList.add('active');
        });
    }
}

function openFirstAccordion() {
    const firstAccordionItem = accordionItems[0];
    const firstAccordionContent = firstAccordionItem.querySelector('.content');
    const firstAccordionSubQuestions = firstAccordionItem.querySelectorAll('.accordion__question-sub');
    firstAccordionItem.classList.add('active');
    firstAccordionContent.classList.add('active');
    firstAccordionContent.style.maxHeight = firstAccordionContent.scrollHeight + 'px';
    firstAccordionSubQuestions.forEach((subQuestion) => {
        subQuestion.classList.add('active');
    });
}

openFirstAccordion();

accordionItems.forEach((item) => {
    item.querySelector('.accordion__question').addEventListener('click', toggleAccordion);
});
