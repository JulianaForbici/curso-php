String.prototype.findParenMatch = function(pos) {
    const char = this[pos];

    if(char == "(") {
        let count = 1;
        for (let i = pos + 1; i < this.length; i++) {
            if (this[i] == "(") count++;
            if (this[i] == ")") count--;
            if (count === 0) return i;
        }
    }
    if(char == ")"){
        let count=1;
        for(let i = pos -1; i >= 0; i--){
            if (this[i] == ")") count++;
            if (this[i] == "(") count--;
            if (count === 0) return i;
        }
    }
    return -1;
};