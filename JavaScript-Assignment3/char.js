var Characters = function(str) {

    var char = "oO"

    var count = 0;

    for (let index = 0; index < str.length; index++) {
        const element = str[index];

        if (char.includes(element)) {
            count += 1;
        }

    }
    console.log(`Peter Piper picked a peck of pickled peppers
    A peck of pickled peppers Peter Piper picked
    If Peter Piper picked a peck of pickled peppers
    Where’s the peck of pickled peppers Peter Piper picked?
    
    This Paragragh has ${count} number of O's in it`)

    console.log("Number of O's in the paragrah are: ", count)



}

var character = new Characters(`Peter Piper picked a peck of pickled peppers 
A peck of pickled peppers Peter Piper picked
If Peter Piper picked a peck of pickled peppers
Where’s the peck of pickled peppers Peter Piper picked`);