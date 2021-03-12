<?php

echo "
	<div class = 'container'>
		<div class = ''>
			<div class = ''>
				<div class = 'card'>
					<div class = 'card-header'>موضوع : {$row['title']}</div>
					<div class = 'card-body'>
						<h5 class = 'card-title'>نام : {$row['name']}</h5>
							<h6>ایمیل : {$row['email']}</h6>
						<p class = 'card-text'>متن پیام : {$row['description']}</p>
						<a href = '#' class = 'btn btn-primary'>پاسخ</a>
					</div>
				</div>
			</div>
		</div>
	</div>
";

?>