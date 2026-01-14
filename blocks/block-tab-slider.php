<?php
/**
 * タブ・スライダーコンテンツ
 * Genesis Custom Blocks 用テンプレート
 *
 * フィールド構成：
 *  - tab01, before01, after01
 *  - tab02, before02, after02
 *  - tab03, before03, after03
 *
 * 仕様：
 *  - tabXX にテキストがあり、Before または After のどちらかに画像が入っていれば 1 グループとして使用
 *  - Before & After 両方ある場合：ImageCompare のスライダー表示
 *  - After がない場合：通常の画像（1枚）表示（比較スライダーにはしない）
 */

// ==========================
// 入力値をグループ化
// ==========================
$groups = array();

// 01〜03 までループ
for ( $i = 1; $i <= 3; $i++ ) {
	$suffix = sprintf( '%02d', $i ); // 01, 02, 03

	$tab_field    = 'tab' . $suffix;
	$before_field = 'before' . $suffix;
	$after_field  = 'after' . $suffix;

	$tab    = trim( (string) block_value( $tab_field ) );
	$before = block_value( $before_field ); // 添付ID想定
	$after  = block_value( $after_field );  // 添付ID想定

	// タイトルと、どちらかの画像が入っていれば有効グループとして採用
	if ( '' !== $tab && ( ! empty( $before ) || ! empty( $after ) ) ) {
		$groups[] = array(
			'tab'    => $tab,
			'before' => $before,
			'after'  => $after,
		);
	}
}

// 有効グループがなければ何も表示しない
if ( empty( $groups ) ) {
	return;
}

// ブロックごとに一意な ID を生成（ARIA 用）
$block_id = 'tab-slider-' . uniqid();
?>

<div class="tab-slider-block js-tab-slider" id="<?php echo esc_attr( $block_id ); ?>">

	<?php
	// ----------------------------------------------------
	// タブ（PC/SP 共通で使用）
	// ----------------------------------------------------
	?>
	<div>
		<ul class="tab-slider-tabs" role="tablist">
			<?php foreach ( $groups as $index => $group ) : ?>
				<?php
				$is_active = ( 0 === $index );
				$tab_id    = $block_id . '-tab-' . $index;
				$panel_id  = $block_id . '-panel-' . $index;
				?>
				<li
					class="tab-slider-tab js-tab-slider-tab <?php echo $is_active ? 'is-active' : ''; ?>"
					data-index="<?php echo esc_attr( $index ); ?>"
					role="tab"
					id="<?php echo esc_attr( $tab_id ); ?>"
					aria-controls="<?php echo esc_attr( $panel_id ); ?>"
					aria-selected="<?php echo $is_active ? 'true' : 'false'; ?>"
				>
					<?php echo esc_html( $group['tab'] ); ?>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>

	<?php
	// ----------------------------------------------------
	// パネル（PC/SP 共通で使用）
	// ----------------------------------------------------
	?>
	<div>
		<?php foreach ( $groups as $index => $group ) : ?>
			<?php
			$is_active = ( 0 === $index );
			$panel_id  = $block_id . '-panel-' . $index;
			?>
			<div
				class="tab-slider-panel js-tab-slider-panel <?php echo $is_active ? 'is-active' : ''; ?>"
				data-index="<?php echo esc_attr( $index ); ?>"
				role="tabpanel"
				id="<?php echo esc_attr( $panel_id ); ?>"
			>
				<div class="tab-slider-panel-inner">

					<?php if ( ! empty( $group['before'] ) && ! empty( $group['after'] ) ) : ?>

						<?php
						// ==========================
						// Before / After 両方あり → ImageCompare スライダー
						// ==========================
						?>
						<div
							class="tab-slider-ba image-compare-viewer"
							data-label-before="Before"
							data-label-after="After"
						>
							<?php
							// Before 画像
							echo wp_get_attachment_image(
								$group['before'],
								'large',
								false,
								array(
									'class' => 'tab-slider-image tab-slider-image--before',
									'alt'   => esc_attr( $group['tab'] . ' Before' ),
								)
							);

							// After 画像
							echo wp_get_attachment_image(
								$group['after'],
								'large',
								false,
								array(
									'class' => 'tab-slider-image tab-slider-image--after',
									'alt'   => esc_attr( $group['tab'] . ' After' ),
								)
							);
							?>
						</div>

					<?php else : ?>

						<?php
						// ==========================
						// After がない（または Before がない）→ 1枚だけ通常表示
						// ==========================
						$img_id     = ! empty( $group['before'] ) ? $group['before'] : $group['after'];
						$alt_suffix = ! empty( $group['before'] ) ? 'Before' : 'After';
						$label_text = $alt_suffix; // ラベル用テキスト
						?>
						<div class="tab-slider-single">
							<?php
							echo wp_get_attachment_image(
								$img_id,
								'large',
								false,
								array(
									'class' => 'tab-slider-image',
									'alt'   => esc_attr( $group['tab'] . ' ' . $alt_suffix ),
								)
							);
							?>
						</div>

					<?php endif; ?>

				</div><!-- /.tab-slider-panel-inner -->
			</div><!-- /.tab-slider-panel -->
		<?php endforeach; ?>
	</div><!-- /.tab-slider-panels -->

</div><!-- /.tab-slider-block -->
