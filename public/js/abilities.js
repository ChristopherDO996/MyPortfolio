var w = 1000,
    h = 800,
    circleWidth = 5;


var palette = {
    "lightgray": "#E5E8E8",
    "gray": "#708284",
    "mediumgray": "#536870",
    "blue": "#3B757F",
    "black": "#000"
}

var colors = d3.scale.category20();

var nodes = [{
    name: "HTML 5",
    target: [0, 2, 4],
    value: 100
},
{
    name: "CSS3 | Less | Sass | Librerías",
    target: [0, 1],
    value: 85
},
{
    name: "Bootstrap 4-5",
    target: [0, 3],
    value: 48
},
{
    name: "Tailwind CSS",
    target: [0, 3, 4],
    value: 40
},
{
    name: "Javascript | Librerías | Fetch API",
    target: [0, 3, 4, 5],
    value: 36
},
{
    name: "jQuery | Ajax",
    target: [0, 1, 2],
    value: 52
},
{
    name: "Vue JS",
    target: [0, 1, 2, 8],
    value: 42
},
{
    name: "PHP",
    target: [0, 1, 2],
    value: 35
},
{
    name: "Laravel 5.4 - 10",
    target: [0, 1, 2, 3, 9],
    value: 67
},
{
    name: "Yii 2",
    target: [0, 1, 2, 3, 4, 5, 6, 7, 8, 10],
    value: 68
},
{
    name: "Git & Github",
    target: [0, 1, 2, 7, 8],
    value: 16
},
{
    name: "Docker",
    target: [0, 1, 2, 7, 8],
    value: 16
},
{
    name: "Google Cloud Platform",
    target: [0, 1, 2, 7, 8],
    value: 16
},
];

var links = [];

for (var i = 0; i < nodes.length; i++) {
    if (nodes[i].target !== undefined) {
        for (var x = 0; x < nodes[i].target.length; x++)
            links.push({
                source: nodes[i],
                target: nodes[nodes[i].target[x]]
            });
    };
};
console.log(links);

var myChart = d3.select('#abilitiesCircles')
    .append("div")
    .classed("svg-container", true)

    .append('svg')
    .attr("preserveAspectRatio", "xMinYMin meet")
    .attr("viewBox", "0 0 1000 800")
    .classed("svg-content-responsive", true)


var force = d3.layout.force()
    .nodes(nodes)
    .links([])
    .gravity(0.1)
    .charge(-1000)
    .size([w, h]);

var link = myChart.selectAll('line')
    .data(links).enter().append('line')
    .attr('stroke', palette.lightgray)
    .attr('strokewidth', '1');

var node = myChart.selectAll('circle')
    .data(nodes).enter()
    .append('g')
    .call(force.drag);


node.append('circle')
    .attr('cx', function (d) {
        return d.x;
    })
    .attr('cy', function (d) {
        return d.y;
    })
    .attr('r', function (d, i) {
        console.log(d.value);
        if (i > 0) {
            return circleWidth + d.value;
        } else {
            return circleWidth + 35;
        }
    })
    .attr('fill', function (d, i) {
        return colors(i);
    })
    .attr('strokewidth', function (d, i) {
        /*  if (i > 0) { */
        return '0';
        /* } else { */
        /* return '2'; */
        /* } */
    })
    .attr('stroke', function (d, i) {
        if (i > 0) {
            return '';
        } else {
            return 'black';
        }
    });


force.on('tick', function (e) {
    node.attr('transform', function (d, i) {
        return 'translate(' + d.x + ',' + d.y + ')'
    })

    link
        .attr('x1', function (d) {
            return d.source.x;
        })
        .attr('y1', function (d) {
            return d.source.y;
        })
        .attr('x2', function (d) {
            return d.target.x;
        })
        .attr('y2', function (d) {
            return d.target.y;
        })
});


node.append('text')
    .text(function (d) {
        return d.name;
    })
    .attr('fill', function () {
        return palette.lightgray;
    })
    .attr('text-anchor', function () {
        return 'middle';
    })
    .attr('font-size', function () {
        return '16px';
    })

force.start();