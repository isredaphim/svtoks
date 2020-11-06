<php>
<head>
	<title>SVG</title>
	<link rel = "stylesheet" href = "styles.css"	>
</head>
<body>
        <svg class="LineCircle">
            <circle cx="100" cy="150" r="60" fill="yellow" stroke="yellow" stroke-width="3" />
			<line x1="40" y1="150" x2="110" y2="150" stroke="black" stroke-width="5"/>
            <circle cx = "80" cy = "125" r="15" fill = "black" stroke-width="1" stroke = "black"/>
            <line x1="60" y1="200" x2="112" y2="150" stroke="black" stroke-width="5"/>
        </svg>
        <svg class = "RectCircle">
            <rect x="30" y="100" width="150px" height="100px" rx="3" ry="3" fill="white" />
            <circle cx = "65" cy = "130" r="10" fill = "black" stroke-width="1" stroke= "black"/>
            <circle cx = "147" cy = "130" r="10" fill = "black" stroke-width="1" stroke= "black"/>
			<line x1="40" y1="180" x2="170" y2="180" stroke="black" stroke-width="5"/>
        </svg>    
            <svg class = "PolylineCircle">
			    <rect x="50" y="80" width="100px" height="150px" rx="3" ry="3" fill="white" />
				<circle cx = "80" cy = "100" r="10" fill = "black" stroke-width="1" stroke= "black"/>
                <circle cx = "120" cy = "100" r="10" fill = "black" stroke-width="1" stroke= "black"/>
                <circle cx = "80" cy = "150" r="10" fill = "black" stroke-width="1" stroke= "black"/>
                <circle cx = "120" cy = "150" r="10" fill = "black" stroke-width="1" stroke= "black"/>
                <circle cx = "80" cy = "200" r="10" fill = "black" stroke-width="1" stroke= "black"/>
                <circle cx = "120" cy = "200" r="10" fill = "black" stroke-width="1" stroke= "black"/>
            </svg>
            <svg class= "PolygonEllipse">
                <polygon points="95 80, 8 200, 190 200," fill="brown" stroke="brown"/>
                <ellipse cx = "100" cy = "200" rx = "90" ry = "10" fill = "blue" stroke-width="1" stroke= "blue"/>
            </svg>
    
        <svg class="Circlelinerectangle">
            <rect  x = "2" y = "150" width = "195" height = "30" fill = "black" stroke-width = "1" stroke = "black"/>
            <line x1="150" y1="150" x2="150" y2="100" stroke="#000" stroke-width="5" />
            <line x1="50" y1="150" x2="50" y2="100" stroke="#000" stroke-width="5" />
            <circle cx = "150" cy = "80" r="30" fill = "yellow" stroke-width="1" stroke= "yellow"/>
            <circle cx = "50" cy = "80" r="30" fill = "yellow" stroke-width="1" stroke= "yellow)"/>
			<line x1="150" y1="250" x2="150" y2="180" stroke="#000" stroke-width="5" />
            <line x1="50" y1="250" x2="50" y2="180" stroke="#000" stroke-width="5" />
            <circle cx = "150" cy = "250" r="30" fill = "yellow" stroke-width="1" stroke= "rgb(255,102,178)"/>
            <circle cx = "50" cy = "250" r="30" fill = "yellow" stroke-width="1" stroke= "rgb(255,102,178)"/>
         </svg>
		 
         <svg class="PolylinePolygon">
                    <circle cx="20" cy="20" r="10" fill="#FE0000" stroke-width="1" stroke=""/>
			<circle cx="75" cy="35" r="15" fill="#FE3A00" stroke-width="1" stroke=""/>
			<circle cx="145" cy="45" r="20" fill="#FE5C00" stroke-width="1" stroke=""/>
			<circle cx="145" cy="135" r="45" fill="#FE7F00" stroke-width="1" stroke=""/>
			<circle cx="145" cy="225" r="20" fill="#FEAD00" stroke-width="1" stroke=""/>
			<circle cx="75" cy="235" r="15" fill="#FECF00" stroke-width="1" stroke=""/>
			<circle cx="20" cy="250" r="10" fill="#FEF600" stroke-width="1" stroke=""/>
         </svg>
                <svg class="CircleRectanglePolylinePolygonEllipse">
                    <rect width="100" height="300" fill="red" stroke-width="0" stroke="rgb(0,0,0)"/>
				<line x1="125" y1="70" x2="0" y2="0" stroke-width="100" stroke="white"/>
				<line x1="75" y1="70" x2="200" y2="0" stroke-width="100" stroke="white"/>
				<circle cx="100" cy="40" r="20" fill="yellow" stroke-width="1" stroke=""/>
				<circle cx="99" cy="95" r="10" fill="yellow" stroke-width="1" stroke=""/>
				<circle cx="185" cy="15" r="10" fill="yellow" stroke-width="1" stroke=""/>
				<circle cx="15" cy="15" r="10" fill="yellow" stroke-width="1" stroke=""/>
        

                </svg>
</body>
</php>
