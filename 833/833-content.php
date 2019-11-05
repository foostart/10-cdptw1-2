<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-833">
	<div class="container">
		<h1>điểm thi hk1</h1>
		<h3>Họ và tên: Huỳnh Văn Nam</h3>
		<h3>Lớp: 10A8</h3>
		<div class="tab">
			<table>
				<tr>
					<th>STT</th>
					<th>MÔN</th>
					<th>M</th>
					<th>15'</th>
					<th>1T</th>
					<th>Thi</th>
					<th>DTB</th>
				</tr>

				<tr class="toan">
					<td>1</td>
					<td>Toán</td>
					<td>9</td>
					<td>7.5</td>
					<td>8</td>
					<td>9</td>
					<td>9</td>
				</tr>

				<tr class="van">
					<td>2</td>
					<td>Ngữ Văn</td>
					<td>6.5</td>
					<td>7.5</td>
					<td>8</td>
					<td>9</td>
					<td>9</td>
				</tr>

				<tr class="toan">
					<td>3</td>
					<td>Tiếng Anh</td>
					<td>6.5</td>
					<td>7.5</td>
					<td>5.5</td>
					<td>9</td>
					<td>9</td>
				</tr>

				<tr class="van">
					<td>4</td>
					<td>Vật Lý</td>
					<td>6.5</td>
					<td>7.5</td>
					<td>8</td>
					<td>9</td>
					<td>9</td>
				</tr>

				<tr class="toan">
					<td>5</td>
					<td>Địa Lý</td>
					<td>6.5</td>
					<td>7.5</td>
					<td>8</td>
					<td>9</td>
					<td>9</td>
				</tr>

				<tr class="van">
					<td>6</td>
					<td>Lịch Sử</td>
					<td>6.5</td>
					<td>7.5</td>
					<td>8</td>
					<td>9</td>
					<td>9</td>
				</tr>

				<tr class="toan">
					<td>7</td>
					<td>Hóa Học</td>
					<td>6.5</td>
					<td>7.5</td>
					<td>8</td>
					<td>9</td>
					<td>9</td>
				</tr>
			</table>
		</div>
	</div>
</div>