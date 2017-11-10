<?php


namespace Netlte;


/**
 * @author       Tomáš Holan <mail@tomasholan.eu>
 * @package      netlte/document
 * @copyright    Copyright © 2017, Tomáš Holan [www.tomasholan.eu]
 */
class Document {

	/** @var string|null */
	private $title = NULL;

	/** @var string|null */
	private $header = NULL;

	/** @var string|null */
	private $subheader = NULL;

	/** @var array */
	private $js = [];

	/** @var array */
	private $css = [];

	/**
	 * @return string|null
	 */
	public function getTitle(): ?string {
		return $this->title;
	}

	/**
	 * @return string|null
	 */
	public function getHeader(): ?string {
		return $this->header;
	}

	/**
	 * @return string|null
	 */
	public function getSubheader(): ?string {
		return $this->subheader;
	}

	/**
	 * @return array
	 */
	public function getJsAssets(): array {
		return $this->js;
	}

	/**
	 * @return array
	 */
	public function getCssAssets(): array {
		return $this->css;
	}



	/**
	 * @param null|string $title
	 * @return Document
	 */
	public function setTitle(string $title = NULL): self {
		$this->title = $title;

		return $this;
	}

	/**
	 * @param null|string $header
	 * @return Document
	 */
	public function setHeader(string $header = NULL): self {
		$this->header = $header;

		return $this;
	}

	/**
	 * @param null|string $subheader
	 * @return Document
	 */
	public function setSubheader(string $subheader = NULL): self {
		$this->subheader = $subheader;

		return $this;
	}

	/**
	 * @param string $asset
	 * @return Document
	 */
	public function addJs(string $asset): self {
		if (in_array($asset, $this->js)) {
			return $this;
		}
		$this->js = $asset;

		return $this;
	}

	/**
	 * @param string $asset
	 * @return Document
	 */
	public function addCss(string $asset): self {
		if (in_array($asset, $this->css)) {
			return $this;
		}
		$this->css = $asset;

		return $this;
	}



}