<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Net Echarts | </title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">


    <script src="js/jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

             <?php
				include'menuLateral.php';
			?>

            <!-- top navigation -->
            <div class="top_nav">

                <?php
				include'barraSuperior.php';
				?>

            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">

                <div class="">
                    
					<!--
					<div class="page-title">
                        <div class="title_left">
                            <h3>
                    Echarts 
                    <small>
                        Some examples to get you started
                    </small>
                </h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
					
					-->
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Bar Graph</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div id="mainb" style="height:350px;"></div>

                                </div>
                            </div>
							
							
                        </div>
						
						
						<div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Bar Graph</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div id="mainb2" style="height:350px;"></div>

                                </div>
                            </div>
							
							
                        </div>

                        


                       


                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Scatter Graph</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div id="echart_scatter" style="height:350px;"></div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Line Graph</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div id="echart_line" style="height:350px;"></div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Horizontal Bar</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div id="echart_bar_horizontal" style="height:370px;"></div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>World Map</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div id="echart_world_map" style="height:370px;"></div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- footer content -->
                <footer>
                   <?php
						include'footer.php';
					?>	
                </footer>
                <!-- /footer content -->

            </div>
            <!-- /page content -->
        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="js/bootstrap.min.js"></script>

    <!-- chart js -->
    <script src="js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="js/icheck/icheck.min.js"></script>

    <script src="js/custom.js"></script>

    <!-- echart -->
    <script src="js/echart/echarts-all.js"></script>
    <script src="js/echart/green.js"></script>

    <script>
        var myChart9 = echarts.init(document.getElementById('mainb'), theme);
        myChart9.setOption({
   
    title : {
        text: 'Primer Gráfico',
        subtext: 'Redes',
        x:'right',
        y:'bottom'
    },
    tooltip : {
        trigger: 'item',
        formatter: '{a} : {b}'
    },
    toolbox: {
        show : true,
        feature : {
            restore : {show: true},
            magicType: {show: true, type: ['force', 'chord']},
            saveAsImage : {show: true}
        }
    },
    legend: {
        x: 'left',
        data:['nodosx','nodosy']
    },
    series : [
        {
            type:'force',
            name : "Grafico",
            ribbonType: false,
            categories : [
                {
                    name: 'nodosz'
                },
                {
                    name: 'nodosx'
                },
                {
                    name:'nodosy'
                }
            ],
            itemStyle: {
                normal: {
                    label: {
                        show: true,
                        textStyle: {
                            color: '#333'
                        }
                    },
                    nodeStyle : {
                        brushType : 'both',
                        borderColor : 'rgba(255,215,0,0.4)',
                        borderWidth : 1
                    },
                    linkStyle: {
                        type: 'curve'
                    }
                },
                emphasis: {
                    label: {
                        show: false
                        // textStyle: null      // 默认使用全局文本样式，详见TEXTSTYLE
                    },
                    nodeStyle : {
                        //r: 30
                    },
                    linkStyle : {}
                }
            },
            useWorker: false,
            minRadius : 15,
            maxRadius : 25,
            gravity: 1.1,
            scaling: 1.1,
            roam: 'move',
            nodes:[
                {category:0, name: 'nodo1', value : 10, label: 'nodo1'},
                {category:1, name: 'nodo2-nodo1',value : 2},
                {category:1, name: 'nodo3-nodo1',value : 3},
                {category:1, name: 'nodo4-nodo1',value : 3},
                {category:1, name: 'nodo5-nodo6',value : 7},
                {category:2, name: 'nodo7-nodo8',value : 5},
                {category:2, name: 'nodo9',value : 8},
                {category:2, name: 'nodo10-nodo11',value : 9},
                {category:2, name: 'nodo12-nodo13',value : 4},
                {category:2, name: 'nodo14-nodo15',value : 4},
                {category:2, name: 'nodo16-nodo17',value : 1},
            ],
            links : [
                {source : 'nodo2-nodo1', target : 'nodo1', weight : 1, name: 'A'},
                {source : 'nodo3-nodo1', target : 'nodo1', weight : 2, name: 'B'},
                {source : 'nodo4-nodo1', target : 'nodo1', weight : 1, name: 'C'},
                {source : 'nodo5-nodo6', target : 'nodo1', weight : 2},
                {source : 'nodo7-nodo8', target : 'nodo1', weight : 3, name: 'E'},
                {source : 'nodo9', target : 'nodo1', weight : 1},
                {source : 'nodo10-nodo11', target : 'nodo1', weight : 6, name: 'G'},
                {source : 'nodo12-nodo13', target : 'nodo1', weight : 1, name: 'H'},
                {source : 'nodo14-nodo15', target : 'nodo1', weight : 1},
                {source : 'nodo16-nodo17', target : 'nodo1', weight : 1},
                {source : 'nodo4-nodo1', target : 'nodo3-nodo1', weight : 1},
                {source : 'nodo9', target : 'nodo3-nodo1', weight : 1},
                {source : 'nodo9', target : 'nodo4-nodo1', weight : 1},
                {source : 'nodo9', target : 'nodo5-nodo6', weight : 1},
                {source : 'nodo9', target : 'nodo7-nodo8', weight : 1},
                {source : 'nodo10-nodo11', target : 'nodo9', weight : 6},
                {source : 'nodo10-nodo11', target : 'nodo4-nodo1', weight : 1},
                {source : 'nodo14-nodo15', target : 'nodo9', weight : 1}
            ]
        }
    ]
	});
		
	
		
		
		var nodes = [];
var links = [];
var constMaxDepth = 2;
var constMaxChildren = 7;
var constMinChildren = 4;
var constMaxRadius = 10;
var constMinRadius = 2;

function rangeRandom(min, max) {
    return Math.random() * (max - min) + min;
}

function createRandomNode(depth) {
    var node = {
        name : 'NODE_' + nodes.length,
        value : rangeRandom(constMinRadius, constMaxRadius),
        // Custom properties
        id : nodes.length,
        depth : depth,
        category : depth === constMaxDepth ? 0 : 1
    }
    nodes.push(node);

    return node;
}

function forceMockThreeData() {
    var depth = 0;
    var rootNode = {
        name : 'ROOT',
        value : rangeRandom(constMinRadius, constMaxRadius),
        // Custom properties
        id : 0,
        depth : 0,
        category : 2
    }
    nodes.push(rootNode);

    function mock(parentNode, depth) {
        var nChildren = Math.round(rangeRandom(constMinChildren, constMaxChildren));
        
        for (var i = 0; i < nChildren; i++) {
            var childNode = createRandomNode(depth);
            links.push({
                source : parentNode.id,
                target : childNode.id,
                weight : 1 
            });
            if (depth < constMaxDepth) {
                mock(childNode, depth + 1);
            }
        }
    }

    mock(rootNode, 0);
}

forceMockThreeData();

		
		
		
		  var myChart2 = echarts.init(document.getElementById('mainb2'), theme);
        myChart2.setOption({
   
    

    title : {
        text: 'Force',
        subtext: 'Force-directed tree',
        x:'right',
        y:'bottom'
    },
    tooltip : {
        trigger: 'item',
        formatter: '{a} : {b}'
    },
    toolbox: {
        show : true,
        feature : {
            restore : {show: true},
            magicType: {show: true, type: ['force', 'chord']},
            saveAsImage : {show: true}
        }
    },
    legend: {
        x: 'left',
        data:['nodosx','nodosy', 'nodosz']
    },
    series : [
        {
            type:'force',
            name : "Force tree",
            ribbonType: false,
            categories : [
                {
                    name: 'nodosx'
                },
                {
                    name: 'nodosy'
                },
                {
                    name: 'nodosz'
                }
            ],
            itemStyle: {
                normal: {
                    label: {
                        show: false
                    },
                    nodeStyle : {
                        brushType : 'both',
                        borderColor : 'rgba(255,215,0,0.6)',
                        borderWidth : 1
                    }
                }
            },
            minRadius : constMinRadius,
            maxRadius : constMaxRadius,
            coolDown: 0.995,
            steps: 10,
            nodes : nodes,
            links : links,
            steps: 1
        }
    ]
});
		
		
		
		 var myChart9 = echarts.init(document.getElementById('echart_scatter'), theme);
        myChart9.setOption({
          
		  
		   title : {
        text: 'Prueba：nodo1',
        subtext: 'subtexto',
        x:'right',
        y:'bottom'
    },
    tooltip : {
        trigger: 'item',
        formatter: '{a} : {b}'
    },
    toolbox: {
        show : true,
        feature : {
            restore : {show: true},
            magicType: {show: true, type: ['force', 'chord']},
            saveAsImage : {show: true}
        }
    },
    legend: {
        x: 'left',
        data:['nodosx','nodosy']
    },
    series : [
        {
            type:'force',
            name : "Prueba",
            ribbonType: false,
            categories : [
                {
                    name: 'nodosz'
                },
                {
                    name: 'nodosx',
                    symbol: 'diamond'
                },
                {
                    name:'nodosy'
                }
            ],
            itemStyle: {
                normal: {
                    label: {
                        show: true,
                        textStyle: {
                            color: '#333'
                        }
                    },
                    nodeStyle : {
                        brushType : 'both',
                        borderColor : 'rgba(255,215,0,0.4)',
                        borderWidth : 1
                    }
                },
                emphasis: {
                    label: {
                        show: false
                        // textStyle: null      // 默认使用全局文本样式，详见TEXTSTYLE
                    },
                    nodeStyle : {
                        //r: 30
                    },
                    linkStyle : {}
                }
            },
            minRadius : 15,
            maxRadius : 25,
            gravity: 1.1,
            scaling: 1.2,
            draggable: false,
            linkSymbol: 'arrow',
            steps: 10,
            coolDown: 0.9,
            //preventOverlap: true,
            nodes:[
                {
                    category:0, name: 'nodo1', value : 10,
                    symbol: 'image://http://www.damndigital.com/wp-content/uploads/2010/12/steve-jobs.jpg',
                    symbolSize: [60, 35],
                    draggable: true,
                    itemStyle: {
                        normal: {
                            label: {
                                position: 'right',
                                textStyle: {
                                    color: 'black'
                                }
                            }
                        }
                    }
                },
                {category:1, name: 'nodo2-nodo1',value : 2},
                {category:1, name: 'nodo3-nodo1',value : 3},
                {category:1, name: 'nodo4-nodo1',value : 3},
                {category:1, name: 'nodo5-nodo6',value : 7},
                {category:2, name: 'nodo7-nodo8',value : 5},
                {category:2, name: 'nodo9',value : 8},
                {category:2, name: 'nodo10-nodo11',value : 9},
                {category:2, name: 'nodo12-nodo13',value : 4},
                {category:2, name: 'nodo14-nodo15',value : 4},
                {category:2, name: 'nodo16-nodo17',value : 1},
            ],
            links : [
                {source : 'nodo2-nodo1', target : 'nodo1', weight : 1, name: 'A', itemStyle: {
                    normal: {
                        width: 1.5,
                        color: 'red'
                    }
                }},
                {source : 'nodo1', target : 'nodo2-nodo1', weight : 1, name: 'B', itemStyle: {
                    normal: { color: 'red' }
                }},
                {source : 'nodo3-nodo1', target : 'nodo1', weight : 2, name: 'B'},
                {source : 'nodo4-nodo1', target : 'nodo1', weight : 1, name: 'C'},
                {source : 'nodo5-nodo6', target : 'nodo1', weight : 2},
                {source : 'nodo7-nodo8', target : 'nodo1', weight : 3, name: 'D'},
                {source : 'nodo9', target : 'nodo1', weight : 1},
                {source : 'nodo10-nodo11', target : 'nodo1', weight : 6, name: 'E'},
                {source : 'nodo12-nodo13', target : 'nodo1', weight : 1, name: 'F'},
                {source : 'nodo14-nodo15', target : 'nodo1', weight : 1},
                {source : 'nodo16-nodo17', target : 'nodo1', weight : 1},
                {source : 'nodo4-nodo1', target : 'nodo3-nodo1', weight : 1},
                {source : 'nodo9', target : 'nodo3-nodo1', weight : 1},
                {source : 'nodo9', target : 'nodo4-nodo1', weight : 1},
                {source : 'nodo9', target : 'nodo5-nodo6', weight : 1},
                {source : 'nodo9', target : 'nodo7-nodo8', weight : 1},
                {source : 'nodo10-nodo11', target : 'nodo9', weight : 6},
                {source : 'nodo10-nodo11', target : 'nodo4-nodo1', weight : 1},
                {source : 'nodo14-nodo15', target : 'nodo9', weight : 1}
            ]
        }
    ]

});

		
		var myChart9 = echarts.init(document.getElementById('echart_line'), theme);
        myChart9.setOption({
             title : {
        text: 'PruebaA',
        x:'right',
        y:'bottom'
    },
    tooltip : {
        trigger: 'item',
        formatter: function (params) {
            if (params.indicator2) {    // is edge
                return params.indicator2 + ' ' + params.name + ' ' + params.indicator;
            } else {    // is node
                return params.name
            }
        }
    },
    toolbox: {
        show : true,
        feature : {
            restore : {show: true},
            magicType: {show: true, type: ['force', 'chord']},
            saveAsImage : {show: true}
        }
    },
    legend: {
        x: 'left',
        data:['nodosx', 'nodosy', 'nodosz']
    },
    series : [
        {
            name: 'PruebaA',
            type:'chord',
            sort : 'ascending',
            sortSub : 'descending',
            ribbonType: false,
            radius: '60%',
            itemStyle : {
                normal : {
                    label : {
                        rotate : true
                    }
                }
            },
            minRadius: 7,
            maxRadius: 20,
            // 使用 nodes links 表达和弦图
            nodes: [
                {name:'nodo1'},
                {name:'nodo2'},
                {name:'nodo3'},
                {name:'nodo4'},
                {name:'nodo5'},
                {name:'nodo6'},
                {name:'nodo7'},
                {name:'nodo8'},
                {name:'nodo9', symbol: 'star'},
                {name:'nodo10'},
                {name:'nodo11'},
                {name:'nodo12'},
                {name:'nodo13'},
                {name:'nodo14'},
                {name:'nodosx'},
                {name:'nodosy'},
                {name:'nodosz'}
            ],
            links: [
                {source: 'nodosx', target: 'nodo1', weight: 1, name: 'Relacion'},
                {source: 'nodosx', target: 'nodo2', weight: 1, name: 'Relacion'},
                {source: 'nodosx', target: 'nodo3', weight: 1, name: 'Relacion'},
                {source: 'nodosy', target: 'nodo4', weight: 1, name: 'Relacion'},
                {source: 'nodosy', target: 'nodo5', weight: 1, name: 'Relacion'},
                {source: 'nodosy', target: 'nodo6', weight: 1, name: 'Relacion'},
                {source: 'nodosy', target: 'nodo7', weight: 1, name: 'Relacion'},
                {source: 'nodosy', target: 'nodo8', weight: 1, name: 'Relacion'},
                {source: 'nodosy', target: 'nodo9', weight: 1, name: 'Relacion'},
                {source: 'nodosy', target: 'nodo10', weight: 1, name: 'Relacion'},
                {source: 'nodosz', target: 'nodo11', weight: 1, name: 'Relacion'},
                {source: 'nodosz', target: 'nodo12', weight: 1, name: 'Relacion'},
                {source: 'nodosz', target: 'nodo13', weight: 1, name: 'Relacion'},
                {source: 'nodosz', target: 'nodo14', weight: 1, name: 'Relacion'}
            ]
        }
    ]
        });
		
		
		var myChart9 = echarts.init(document.getElementById('echart_bar_horizontal'), theme);
        myChart9.setOption({
                  color : [
        '#FBB367','#80B1D2','#FB8070','#CC99FF','#B0D961',
        '#99CCCC','#BEBBD8','#FFCC99','#8DD3C8','#FF9999',
        '#CCEAC4','#BB81BC','#FBCCEC','#CCFF66','#99CC66',
        '#66CC66','#FF6666','#FFED6F','#ff7f50','#87cefa',
    ],
    title : {
        text : 'Prueba',
        subtext: 'Subtexto',
        sublink: 'http://international.caixin.com/2013-09-06/100579154.html',
        x:'right',
        y:'bottom'
    },
    toolbox: {
        show : true,
        feature : {
            restore : {show: true},
            magicType: {show: true, type: ['force', 'chord']},
            saveAsImage : {show: true}
        }
    },
    tooltip : {
        trigger: 'item',
        formatter : function (params) {
            if (params.name && params.name.indexOf('-') != -1) {
                return params.name.replace('-', ' ' + params.seriesName + ' ')
            }
            else {
                return params.name ? params.name : params.data.id
            }
        }
    },
    legend : {
        data : [
            'nodo1',
            'nodo2',
            'nodo3',
            'nodo4',
            'nodo5',
            'nodo6',
            'nodo7',
            'nodo8',
            'nodo9',
            'nodo10',
            'nodo11',
            'nodo12',
            'nodo13',
            'nodo14',
            'nodo15',
            '',
            'nodo16',
            'nodo17',
            'nodo18'
        ],
        orient : 'vertical',
        x : 'left'
    },
    series : [
        {
            "name": "nodo16",
            "type": "chord",
            "showScaleText": false,
            "clockWise": false,
            "data": [
                {"name": "nodo1"},
                {"name": "nodo2"},
                {"name": "nodo3"},
                {"name": "nodo4"},
                {"name": "nodo5"},
                {"name": "nodo6"},
                {"name": "nodo7"},
                {"name": "nodo8"},
                {"name": "nodo9"},
                {"name": "nodo10"},
                {"name": "nodo11"},
                {"name": "nodo12"},
                {"name": "nodo13"},
                {"name": "nodo14"},
                {"name": "nodo15"}
            ],
            "matrix": [
                [0,100,0,0,0,0,100,0,0,0,0,0,0,0,0],
                [10,0,0,0,0,10,10,0,10,0,0,10,10,10,10],
                [0,0,0,10,0,0,0,0,0,10,10,0,0,0,0],
                [0,0,100,0,0,100,0,0,0,0,100,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0,0,0,0,10,0],
                [0,100,0,10,0,0,0,0,0,0,0,0,10,0,0],
                [10,100,0,0,0,0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0,0,10,10,0,0],
                [0,100,0,0,0,0,0,0,0,0,0,0,0,0,0],
                [0,0,100,0,0,0,0,0,0,0,0,0,0,0,0],
                [0,0,100,10,0,0,0,0,0,0,0,0,0,0,0],
                [0,100,0,0,0,0,0,100,0,0,0,0,0,0,0],
                [0,100,0,0,0,100,0,100,0,0,0,0,0,0,0],
                [0,100,0,0,100,0,0,0,0,0,0,0,0,0,100],
                [0,100,0,0,0,0,0,0,0,0,0,0,0,10,0]
            ]
        },
        {
            "name": "nodo17",
            "type": "chord",
            "insertToSerie": "nodo16",
            "data": [
                {"name": "nodo1"},
                {"name": "nodo2"},
                {"name": "nodo3"},
                {"name": "nodo4"},
                {"name": "nodo5"},
                {"name": "nodo6"},
                {"name": "nodo7"},
                {"name": "nodo8"},
                {"name": "nodo9"},
                {"name": "nodo10"},
                {"name": "nodo11"},
                {"name": "nodo12"},
                {"name": "nodo13"},
                {"name": "nodo14"},
                {"name": "nodo15"}
            ],
            "matrix": [
                [0,0,100,100,0,100,0,0,100,0,0,0,0,0,0],
                [0,0,0,10,0,0,0,0,0,10,10,0,0,0,0],
                [10,0,0,0,0,0,10,10,10,0,0,10,10,0,10],
                [10,100,0,0,0,0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,10,0,100,0,0,0,10,10,0,0],
                [10,0,0,0,100,0,10,0,0,0,0,0,0,0,0],
                [0,0,100,0,0,100,0,0,0,0,0,0,0,0,0],
                [0,0,100,0,10,0,0,0,0,0,0,0,0,10,0],
                [10,0,100,0,0,0,0,0,0,0,0,0,0,100,0],
                [0,100,0,0,0,0,0,0,0,0,0,0,0,0,0],
                [0,100,0,0,0,0,0,0,0,0,0,0,0,0,0],
                [0,0,100,0,100,0,0,0,0,0,0,0,0,0,0],
                [0,0,100,0,100,0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,100,10,0,0,0,0,0,0],
                [0,0,100,0,0,0,0,0,0,0,0,0,0,0,0]
            ]
        },
        {
            "name": "nodo18",
            "type": "chord",
            "insertToSerie": "nodo16",
            "data": [
                {"name": "nodo1"},
                {"name": "nodo2"},
                {"name": "nodo3"},
                {"name": "nodo4"},
                {"name": "nodo5"},
                {"name": "nodo6"},
                {"name": "nodo7"},
                {"name": "nodo8"},
                {"name": "nodo9"},
                {"name": "nodo10"},
                {"name": "nodo11"},
                {"name": "nodo12"},
                {"name": "nodo13"},
                {"name": "nodo14"},
                {"name": "nodo15"}
            ],
            "matrix": [
                [0,0,0,0,100,0,0,100,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
                [10,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
                [10,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
            ]
        }
    ]
        });
		
		
		
        
       
	   var myChart9 = echarts.init(document.getElementById('echart_world_map'), theme);
        myChart9.setOption({
            
     title : {
        text: '测试数据',
        subtext: 'From d3.js',
        x:'right',
        y:'bottom'
    },
    tooltip : {
        trigger: 'item',
        formatter: function (params) {
            if (params.indicator2) { // is edge
                return params.value.weight;
            } else {// is node
                return params.name
            }
        }
    },
    toolbox: {
        show : true,
        feature : {
            restore : {show: true},
            magicType: {show: true, type: ['force', 'chord']},
            saveAsImage : {show: true}
        }
    },
    legend: {
        x: 'left',
        data:['group1','group2', 'group3', 'group4']
    },
    series : [
        {
            type:'chord',
            sort : 'ascending',
            sortSub : 'descending',
            showScale : true,
            showScaleText : true,
            data : [
                {name : 'group1'},
                {name : 'group2'},
                {name : 'group3'},
                {name : 'group4'}
            ],
            itemStyle : {
                normal : {
                    label : {
                        show : false
                    }
                }
            },
            matrix : [
                [11975,  5871, 8916, 2868],
                [ 1951, 10048, 2060, 6171],
                [ 8010, 16145, 8090, 8045],
                [ 1013,   990,  940, 6907]
            ]
        }
    ]
});



	   
    </script>
</body>

</html>