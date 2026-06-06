document.addEventListener("alpine:init", () => {
    Alpine.data(
        "rankingSystem",
        (initialScores, initialParticipants, activeTab) => ({
            // Bind properties passed from Blade
            results: initialScores,
            participants: initialParticipants,
            activeTab: activeTab,

            get rankings() {
                // console.log(this.results, this.participants, this.activeTab);
                // Only include participants from this gender/group
                let scoresArray = this.participants.map((id) => {
                    let participantScores =
                        this.results[this.activeTab]?.[id] || {};
                  
                    let total = Object.values(participantScores).reduce(
                        (a, b) => Number(a) + Number(b),
                        0,
                    );

                    return { id: id, total: total };
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

                    // Find ties
                    let j = i;
                    while (
                        j < scoresArray.length &&
                        scoresArray[j].total === item.total
                    ) {
                        j++;
                    }

                    // Fractional ranking computation
                    let startRank = i + 1;
                    let endRank = j;
                    let fractionalRank = (startRank + endRank) / 2;

                    for (let k = i; k < j; k++) {
                        ranks[scoresArray[k].id] = fractionalRank;
                    }

                    i = j;
                }

                return ranks;
            },
        }),
    );
});
