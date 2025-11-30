<?php
/**
 * タブ・スライダーコンテンツ
 * Genesis Custom Blocks 用テンプレート
 */

// name01〜name05 と image01〜image05 をまとめて配列にする
$items = array();

for ( $i = 1; $i <= 5; $i++ ) {
	$name_field  = 'name0' . $i;
	$image_field = 'image0' . $i;

	$name  = trim( (string) block_value( $name_field ) );
	$image = block_value( $image_field ); // 画像フィールドは添付IDが入る想定

	// name & image 両方入っているものだけ表示対象にする
	if ( $name && $image ) {
		$items[] = array(
			'name'     => $name,
			'image_id' => (int) $image,
		);
	}
}

if ( empty( $items ) ) {
	// 1件もなければ何も出さない
	return;
}
?>

<div class="tab-slider-block js-tab-slider">

	<?php
	// ----------------------------------------------------
	// PC：タブ切り替えエリア
	// （CSS で PC のみ表示、SP では非表示にする想定）
	// ----------------------------------------------------
	?>
	<div class="tab-slider-tabs-wrap">
		<ul class="tab-slider-tabs">
			<?php foreach ( $items as $index => $item ) : ?>
				<li
					class="tab-slider-tab js-tab-slider-tab <?php echo ( 0 === $index ) ? 'is-active' : ''; ?>"
					data-index="<?php echo esc_attr( $index ); ?>"
				>
					<?php echo esc_html( $item['name'] ); ?>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>

	<div class="tab-slider-panels">
		<?php foreach ( $items as $index => $item ) : ?>
			<div
				class="tab-slider-panel js-tab-slider-panel <?php echo ( 0 === $index ) ? 'is-active' : ''; ?>"
				data-index="<?php echo esc_attr( $index ); ?>"
			>
				<div class="tab-slider-panel-inner">
					<?php
					echo wp_get_attachment_image(
						$item['image_id'],
						'large',
						false,
						array(
							'class' => 'tab-slider-image',
						)
					);
					?>
					<p class="tab-slider-title">
						<?php echo esc_html( $item['name'] ); ?>
					</p>
				</div>
			</div>
		<?php endforeach; ?>
	</div>

	<?php
	// ----------------------------------------------------
	// SP：スライダーエリア
	// （CSS で SP のみ表示、PC では非表示にする想定）
	// ----------------------------------------------------
	?>
	<div class="tab-slider-slider js-tab-slider-slider">
		<?php foreach ( $items as $item ) : ?>
			<div class="tab-slider-slide">
				<div class="tab-slider-panel-inner">
					<?php
					echo wp_get_attachment_image(
						$item['image_id'],
						'large',
						false,
						array(
							'class' => 'tab-slider-image',
						)
					);
					?>
					<p class="tab-slider-title">
						<?php echo esc_html( $item['name'] ); ?>
					</p>
				</div>
			</div>
		<?php endforeach; ?>
	</div>

</div>
