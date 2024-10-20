const faqs = document.getElementsByClassName('faq');

for(i=0;i<faqs.length;i++)
{
    faqs[i].addEventListener('click',function()
    {
        this.classList.toggle('active');
    });
}