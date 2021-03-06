import {
	Fragment,
	createElement,
	Component,
	useRef,
	useEffect,
	useMemo,
	useCallback,
	useState,
} from "@wordpress/element";
import classnames from "classnames";
import { __ } from "@wordpress/i18n";
import GenericOptionType from "../../GenericOptionType";

export const patternsList = [
	{
		id: "type-1",
		title: __("Hideout", "affiliatex"),
		src: "patterns/hideout.svg",
	},

	{
		id: "type-2",
		title: __("Triangles", "affiliatex"),
		src: "patterns/triangles.svg",
	},

	{
		id: "type-3",
		title: __("Bubbles", "affiliatex"),
		src: "patterns/bubbles.svg",
	},

	{
		id: "type-4",
		title: __("Wiggle", "affiliatex"),
		src: "patterns/wiggle.svg",
	},

	{
		id: "type-5",
		title: __("Polka Dots", "affiliatex"),
		src: "patterns/polka-dots.svg",
	},

	{
		id: "type-6",
		title: __("Overlaping Circles", "affiliatex"),
		src: "patterns/overlaping-circles.svg",
	},

	{
		id: "type-7",
		title: __("Texture", "affiliatex"),
		src: "patterns/texture.svg",
	},

	{
		id: "type-8",
		title: __("Diagonal Lines", "affiliatex"),
		src: "patterns/diagonal-lines.svg",
	},

	{
		id: "type-9",
		title: __("Rain", "affiliatex"),
		src: "patterns/rain.svg",
	},

	{
		id: "type-10",
		title: __("Stripes", "affiliatex"),
		src: "patterns/stripes.svg",
	},

	{
		id: "type-11",
		title: __("Diagonal Stripes", "affiliatex"),
		src: "patterns/diagonal-stripes.svg",
	},

	{
		id: "type-12",
		title: __("Intersecting Circles", "affiliatex"),
		src: "patterns/intersecting-circles.svg",
	},

	{
		id: "type-13",
		title: __("Bank Note", "affiliatex"),
		src: "patterns/bank-note.svg",
	},

	{
		id: "type-14",
		title: __("Zig Zag", "affiliatex"),
		src: "patterns/zig-zag.svg",
	},

	{
		id: "type-15",
		title: __("Endless Clouds", "affiliatex"),
		src: "patterns/endless-clouds.svg",
	},

	{
		id: "type-16",
		title: __("Honey Comb", "affiliatex"),
		src: "patterns/honey-comb.svg",
	},

	{
		id: "type-17",
		title: __("Cross Stripes", "affiliatex"),
		src: "patterns/cross-stripes.svg",
	},

	{
		id: "type-18",
		title: __("Autumn", "affiliatex"),
		src: "patterns/autumn.svg",
	},
];

export const getUrlForPattern = (id) =>
	(window.rt_localizations || rt_customizer_localizations).static_public_url +
	`images/${patternsList.find((p) => p.id === id).src}`;

const PatternPicker = ({ option, value, onChange }) => {
	return (
		<Fragment>
			<ul className="ct-patterns-list">
				{patternsList.map((singlePattern) => (
					<li
						onClick={() =>
							onChange({
								...value,
								background_pattern: singlePattern.id,
							})
						}
						className={classnames({
							active:
								singlePattern.id === value.background_pattern,
						})}
						key={singlePattern.id}
						title={singlePattern.title}
					>
						<img
							src={
								(
									window.rt_localizations ||
									rt_customizer_localizations
								).static_public_url +
								`images/${singlePattern.src}`
							}
						/>
					</li>
				))}
			</ul>
			<GenericOptionType
				value={value["patternColor"]}
				values={value}
				option={{
					id: "patternColor",
					label: __("Pattern Color", "affiliatex"),
					type: "ct-color-picker",
					design: "inline",
					value: option.value["patternColor"],
					pickers: [
						{
							title: __("Initial", "affiliatex"),
							id: "default",
						},
					],
					skipNoColorPill: true,
					skipArrow: true,
					appendToBody: false,
				}}
				hasRevertButton={false}
				onChange={(newValue) =>
					onChange({
						...value,
						patternColor: newValue,
					})
				}
			/>
		</Fragment>
	);
};

export default PatternPicker;
