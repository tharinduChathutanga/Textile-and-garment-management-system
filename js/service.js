feature1 = document.getElementsByClassName('feature-1')[0]
feature2 = document.getElementsByClassName('feature-2')[0]
feature3 = document.getElementsByClassName('feature-3')[0]

function blurred(feature) {
    feature.style.transform  = "scale(1.05)";
    feature.style.transition = ".5s ease";
    for(i = 0; i < Arr.length; i++) {
        arr[i].style.filter = "blur(5px)";
        arr[i].style.transition = ".5s ease";
    }
}

function unBlurred(feature) {
    feature.style.transform  = "scale(1)";
    feature.style.transition = ".5s ease";
    for(i = 0; i < Arr.length; i++) {
        arr[i].style.filter = "blur(0px)";
        arr[i].style.transition = ".5s ease";
    }
}

feature1.addEventListener("mouseover", function() {
    arr = [feature2, feature3];
    blurred(feature1);
});

feature1.addEventListener("mouseleave", function() {
    arr = [feature2, feature3];
    unBlurred(feature1);
});

feature2.addEventListener("mouseover", function() {
    arr = [feature1, feature3];
    blurred(feature2);
});

feature2.addEventListener("mouseleave", function() {
    arr = [feature1, feature3];
    unBlurred(feature2);
});

feature3.addEventListener("mouseover", function() {
    arr = [feature1, feature2,];
    blurred(feature3);
});

feature3.addEventListener("mouseleave", function() {
    arr = [feature1, feature2];
    unBlurred(feature3);
});