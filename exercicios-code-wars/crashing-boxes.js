function crashingWeights(grid) {
    let result = [];
    let rows = grid.length;
    let columns = grid[0].length;

    for (let c= 0; c < columns;c++) {
        let total = grid[0][c];
        for (let r= 1; r < rows; r++) {
            if (total > grid[r][c]) {
                total= total + grid[r][c];
            } else {
                total= grid[r][c];
            }
        }
        result.push(total);
    }
    return result;
}