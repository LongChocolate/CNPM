<?php
	function get_chart()
	{
		echo "
		<div class='row'>
    		<h3> Danh sách thu gọn</h3>
            <div class='col-md-12 mx-1 mt-2 chart'>
        		<div class='header-model'>
                	<h4>Danh sách món bán chạy</h4>
                </div>
                <div class='body-model'>
                	<table>
                		<tr id='start'>
							<td></td>
							<td id='row-1' rowspan='6'></td>
							<td id='row-2' rowspan='6'></td>
							<td id='row-3' rowspan='6'></td>
							<td id='row-4' rowspan='6'></td>
							<td id='row-5' rowspan='6'></td>
							<td id='row-6' rowspan='6'></td>
							<td id='row-7' rowspan='6'></td>
						</tr>
						<tr>
							<td>2.500.000</td>
							
						</tr>
						<tr>
							<td>2.000.000</td>
							
						</tr>
                		<tr>
							<td>1.500.000</td>
							
						</tr>
						<tr>
							<td>1.000.000</td>
					
						</tr>
						<tr>
							<td>500.000</td>
						
						</tr>
						<tr id='end'>
							<th>0</th>
							<td>thứ 2</td>
							<td>thứ 3</td>
							<td>thứ 4</td>
							<td>thứ 5</td>
							<td>thứ 6</td>
							<td>thứ 7</td>
							<td>Chủ Nhật</td>

						</tr>
                	</table>
                	<div class='note-chart'> Chú thích
                		<ul class='list-note'>
                			<li>
                				<div id='color-1' class='col-md-3'></div>
                				<div id='note-1' class='col-md-9'>Thứ 2</div>
                			</li>
                			<li>
                				<div id='color-2' class='col-md-3'></div>
                				<div id='note-2' class='col-md-9'>Thứ 3</div>
                			</li>
                			<li>
                				<div id='color-3' class='col-md-3'></div>
                				<div id='note-3' class='col-md-9'>Thứ 4</div>
                			</li>
                			<li>
                				<div id='color-1' class='col-md-3'></div>
                				<div id='note-1' class='col-md-9'>Thứ 5</div>
                			</li>
                			<li>
                				<div id='color-2' class='col-md-3'></div>
                				<div id='note-2' class='col-md-9'>Thứ 6</div>
                			</li>
                			<li>
                				<div id='color-3' class='col-md-3'></div>
                				<div id='note-3' class='col-md-9'>Thứ 7</div>
                			</li>
                		</ul>	                    		
                	</div>
                </div>
            </div>
    	</div>";
	}

?>