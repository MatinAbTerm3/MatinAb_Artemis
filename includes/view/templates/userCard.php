<?php

echo "
	<div class = 'container'>
		<div class = ''>
			<div class = ''>
				<div class = 'card'>
					<div class = 'card-header'>کاربر : {$row['id']}</div>
					<div class = 'card-body'>
						<h5 class = 'card-title'>نام کاربری : {$row['username']}</h5>
							<h6>ایمیل : {$row['email']}</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
";

?>