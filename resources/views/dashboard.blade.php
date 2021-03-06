@extends('layouts.admin')


@section('content')

<div class="row">
	<div class="space-6"></div>

	<div class="col-sm-7 infobox-container">
		<div class="infobox infobox-green">
			<div class="infobox-icon">
				<i class="ace-icon fa fa-comments"></i>
			</div>

			<div class="infobox-data">
				<span class="infobox-data-number">32</span>
				<div class="infobox-content">comments + 2 reviews</div>
			</div>

			<div class="stat stat-success">8%</div>
		</div>

		<div class="infobox infobox-blue">
			<div class="infobox-icon">
				<i class="ace-icon fa fa-twitter"></i>
			</div>

			<div class="infobox-data">
				<span class="infobox-data-number">11</span>
				<div class="infobox-content">new followers</div>
			</div>

			<div class="badge badge-success">
				+32%
				<i class="ace-icon fa fa-arrow-up"></i>
			</div>
		</div>

		<div class="infobox infobox-pink">
			<div class="infobox-icon">
				<i class="ace-icon fa fa-shopping-cart"></i>
			</div>

			<div class="infobox-data">
				<span class="infobox-data-number">8</span>
				<div class="infobox-content">new orders</div>
			</div>
			<div class="stat stat-important">4%</div>
		</div>

		<div class="infobox infobox-red">
			<div class="infobox-icon">
				<i class="ace-icon fa fa-flask"></i>
			</div>

			<div class="infobox-data">
				<span class="infobox-data-number">7</span>
				<div class="infobox-content">experiments</div>
			</div>
		</div>

		<div class="infobox infobox-orange2">
			<div class="infobox-chart">
				<span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"><canvas width="44" height="26" style="display: inline-block; width: 44px; height: 26px; vertical-align: top;"></canvas></span>
			</div>

			<div class="infobox-data">
				<span class="infobox-data-number">6,251</span>
				<div class="infobox-content">pageviews</div>
			</div>

			<div class="badge badge-success">
				7.2%
				<i class="ace-icon fa fa-arrow-up"></i>
			</div>
		</div>

		<div class="infobox infobox-blue2">
			<div class="infobox-progress">
				<div class="easy-pie-chart percentage" data-percent="42" data-size="46" style="height: 46px; width: 46px; line-height: 45px;">
					<span class="percent">42</span>%
				<canvas height="57" width="57" style="height: 46px; width: 46px;"></canvas></div>
			</div>

			<div class="infobox-data">
				<span class="infobox-text">traffic used</span>

				<div class="infobox-content">
					<span class="bigger-110">~</span>
					58GB remaining
				</div>
			</div>
		</div>

		<div class="space-6"></div>

		<div class="infobox infobox-green infobox-small infobox-dark">
			<div class="infobox-progress">
				<div class="easy-pie-chart percentage" data-percent="61" data-size="39" style="height: 39px; width: 39px; line-height: 38px;">
					<span class="percent">61</span>%
				<canvas height="48" width="48" style="height: 39px; width: 39px;"></canvas></div>
			</div>

			<div class="infobox-data">
				<div class="infobox-content">Task</div>
				<div class="infobox-content">Completion</div>
			</div>
		</div>

		<div class="infobox infobox-blue infobox-small infobox-dark">
			<div class="infobox-chart">
				<span class="sparkline" data-values="3,4,2,3,4,4,2,2"><canvas width="39" height="16" style="display: inline-block; width: 39px; height: 16px; vertical-align: top;"></canvas></span>
			</div>

			<div class="infobox-data">
				<div class="infobox-content">Earnings</div>
				<div class="infobox-content">$32,000</div>
			</div>
		</div>

		<div class="infobox infobox-grey infobox-small infobox-dark">
			<div class="infobox-icon">
				<i class="ace-icon fa fa-download"></i>
			</div>

			<div class="infobox-data">
				<div class="infobox-content">Downloads</div>
				<div class="infobox-content">{{$stat['downloads']}}</div>
			</div>
		</div>
		<div class="infobox infobox-blue infobox-small infobox-dark">
			<div class="infobox-chart">
				<span class="sparkline" data-values="3,4,2,3,4,4,2,2"><canvas width="39" height="16" style="display: inline-block; width: 39px; height: 16px; vertical-align: top;"></canvas></span>
			</div>

			<div class="infobox-data">
				<div class="infobox-content">Earnings</div>
				<div class="infobox-content">$32,000</div>
			</div>
		</div>
	</div>

	<div class="vspace-12-sm"></div>

	<div class="col-sm-5">
		<div class="widget-box">
			<div class="widget-header widget-header-flat widget-header-small">
				<h5 class="widget-title">
					<i class="ace-icon fa fa-signal"></i>
					Resource Access
				</h5>

				<div class="widget-toolbar no-border">
					<div class="inline dropdown-hover">
						<button class="btn btn-minier btn-primary">
							This Week
							<i class="ace-icon fa fa-angle-down icon-on-right bigger-110"></i>
						</button>

						<ul class="dropdown-menu dropdown-menu-right dropdown-125 dropdown-lighter dropdown-close dropdown-caret">
							<li class="active">
								<a href="#" class="blue">
									<i class="ace-icon fa fa-caret-right bigger-110">&nbsp;</i>
									This Week
								</a>
							</li>

							<li>
								<a href="#">
									<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
									Last Week
								</a>
							</li>

							<li>
								<a href="#">
									<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
									This Month
								</a>
							</li>

							<li>
								<a href="#">
									<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
									Last Month
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="widget-body">
				<div class="widget-main">
					<div id="piechart-placeholder" style="width: 90%; min-height: 150px; padding: 0px; position: relative;"><canvas class="flot-base" width="558" height="187" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 447px; height: 150px;"></canvas><canvas class="flot-overlay" width="558" height="187" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 447px; height: 150px;"></canvas><div class="legend"><div style="position: absolute; width: 81px; height: 110px; top: 15px; right: -30px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:15px;right:-30px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px">
						<div style="width:4px;height:0;border:5px solid #68BC31;overflow:hidden"></div>
				</div></td><td class="legendLabel">Generic Students</td></tr><tr><td class="legendColorBox">
					<div style="border:1px solid null;padding:1px">
						<div style="width:4px;height:0;border:5px solid #2091CF;overflow:hidden"></div>
					</div></td><td class="legendLabel">Post Graduate</td></tr><tr><td class="legendColorBox">
						<div style="border:1px solid null;padding:1px">
							<div style="width:4px;height:0;border:5px solid #AF4E96;overflow:hidden"></div>
						</div></td><td class="legendLabel">Mature</td></tr><tr><td class="legendColorBox">
							<div style="border:1px solid null;padding:1px">
								<div style="width:4px;height:0;border:5px solid #DA5430;overflow:hidden"></div>
							</div></td><td class="legendLabel">ODL</td></tr><tr><td class="legendColorBox">
								<div style="border:1px solid null;padding:1px">
									<div style="width:4px;height:0;border:5px solid #FEE074;overflow:hidden"></div>
								</div></td><td class="legendLabel">other</td></tr></tbody></table></div></div>

					<div class="hr hr8 hr-double"></div>

					<div class="clearfix">
						<div class="grid3">
							<span class="grey">
								<a href="#" class="btn btn-success btn-app radius-4">
									<i class="ace-icon fa fa-folder-open bigger-230"></i>
									Default
									<span class="badge badge-pink">+100 new</span>
								</a>
								&nbsp; Generic
							</span>
							<h4 class="bigger pull-right">{{$stat['generic']}}</h4>
						</div>

						<div class="grid3">
							<span class="grey">
								<a href="#" class="btn btn-info btn-app radius-4">
									<i class="ace-icon fa fa-briefcase bigger-230"></i>
									Default
									<span class="badge badge-pink">+7 new</span>
								</a>
								&nbsp; Mature
							</span>
							<h4 class="bigger pull-right">{{$stat['mature']}}</h4>
						</div>

						<div class="grid3">
							<span class="grey">
								<a href="#" class="btn btn-default btn-app radius-4">
									<i class="ace-icon fa fa-clock-o bigger-230"></i>
									Default
									<span class="badge badge-pink">+10 new</span>
								</a>
								&nbsp; Post Graduates
							</span>
							<h4 class="bigger pull-right">1,050</h4>
						</div>
					</div>
				</div><!-- /.widget-main -->
			</div><!-- /.widget-body -->
		</div><!-- /.widget-box -->
	</div><!-- /.col -->
</div>
	
	
@endsection
