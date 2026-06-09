function pigIt(str){
    let words = str.split(" ");
    let result = [];
    for (let i = 0; i < words.length; i++) {
        let word = words[i];
        if (word === "!" || word === "?" || word === "." || word === ",") {
            result.push(word);
        } else {
            result.push(word.slice(1) + word[0] + "ay"); }
    }
    return result.join(" ");
}