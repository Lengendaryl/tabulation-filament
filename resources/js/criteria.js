// resources/js/criteria.js
export default () => ({
    results: {},

    // Initialize with data if needed
    init() {
        console.log("Tabulation System Active");
    },

    updateScore(participantId, criterionSlug, value) {
        if (!this.results[participantId]) {
            this.results[participantId] = {};
        }
        this.results[participantId][criterionSlug] = value;
    },

    get rankings() {
        let scoresArray = Object.keys(this.results).map((id) => {
            let total = Object.values(this.results[id]).reduce(
                (a, b) => Number(a) + Number(b),
                0
            );
            return { id, total };
        });

        // Sort descending
        scoresArray.sort((a, b) => b.total - a.total);

        let ranks = {};
        let i = 0;
        while (i < scoresArray.length) {
            let item = scoresArray[i];

            if (!item.total || item.total === 0) {
                ranks[item.id] = "-";
                i++;
                continue;
            }

            let j = i;
            while (
                j < scoresArray.length &&
                scoresArray[j].total === item.total
            ) {
                j++;
            }

            // Fractional/Middle Rank Logic
            let fractionalRank = (i + 1 + j) / 2;

            for (let k = i; k < j; k++) {
                ranks[scoresArray[k].id] = fractionalRank;
            }
            i = j;
        }
        return ranks;
    },
});

// {
//     results: {},
//     get rankings() {
//         // 1. Calculate totals for everyone
//         let scoresArray = Object.keys(this.results).map(id => {
//             let total = Object.values(this.results[id]).reduce((a, b) => Number(a) + Number(b), 0);
//             return { id: id, total: total };
//         });

//         // 2. Sort by total descending
//         scoresArray.sort((a, b) => b.total - a.total);

//         // 3. Group by scores to find ties
//         let ranks = {};
//         let i = 0;
//         while (i < scoresArray.length) {
//             let item = scoresArray[i];

//             if (!item.total || item.total === 0) {
//                 ranks[item.id] = '-';
//                 i++;
//                 continue;
//             }

//             // Find all participants with this exact same score
//             let j = i;
//             while (j < scoresArray.length && scoresArray[j].total === item.total) {
//                 j++;
//             }

//             // Calculate Fractional Rank: Average of positions from (i+1) to j
//             // Formula: (Start Rank + End Rank) / 2
//             let startRank = i + 1;
//             let endRank = j;
//             let fractionalRank = (startRank + endRank) / 2;

//             // Assign this rank to all tied participants
//             for (let k = i; k < j; k++) {
//                 ranks[scoresArray[k].id] = fractionalRank;
//             }

//             // Move the counter to the next score group
//             i = j;
//         }

//         return ranks;
//     }
// }
