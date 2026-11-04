(function () {
  'use strict';

  const prestivo = {

    init() {
      this.cacheDOM();
      this.bindEvents();
      this.searchToggle();
      this.productVariations();
      this.productFilter();
      this.customScrollbar();
      this.addClassWithViewPort();
      this.showProductItemsWithEffects();
      this.woocommerceNavDotsForCarousel();
      this.woocommerceCarouselDragable();
      this.productCategoryVerticalScroll();
      this.productCategoryVerticalDrag();
      this.productCategoryVerticalCustomScrollBar();
      this.blogShopItemsShow();
      this.wooCatalogSorting();
      this.sidebarFilterShowHide();
    },

    /* ---------------------------
     * CACHE COMMON ELEMENTS
     * --------------------------- */
    cacheDOM() {
      this.body = document.body;
      this.searchForms = document.querySelectorAll('.wp-primary-search');
    },

    /* ---------------------------
     * GLOBAL EVENT BINDING
     * --------------------------- */
    bindEvents() { },

    /* ---------------------------
     * HEADER SEARCH TOGGLE
     * --------------------------- */
    searchToggle() {
      const searchContainer = document.querySelectorAll('.wp-primary-search');

      searchContainer.forEach((searchForm) => {
        if (!searchForm) return;

        const body = document.body;
        const toggleIcon = searchForm.querySelector('.wp-search-toggle-container');
        const searchInnerContainer = searchForm.querySelector('.wp-search-container');
        const searchInput = searchForm.querySelector('.wp-block-search__input');
        const fseSearch = document.querySelectorAll('.search-controller .svg, .social-controller .svg');

        /* ---------------------------
         * CLOSE OTHER SEARCH CONTROLLERS
         * --------------------------- */
        fseSearch.forEach((btn) => {
          btn.addEventListener('click', () => {
            body.classList.remove('show-search');
            searchForm.classList.remove('toggled-on');
            toggleIcon?.setAttribute('aria-expanded', 'false');
          });
        });

        /* ---------------------------
         * OPEN / CLOSE TOGGLE
         * --------------------------- */
        toggleIcon?.addEventListener('click', () => {
          const isOpen = searchForm.classList.toggle('toggled-on');
          body.classList.toggle('show-search');

          toggleIcon.setAttribute('aria-expanded', isOpen ? 'true' : 'false');

          if (isOpen) {
            setTimeout(() => searchInput?.focus(), 50);
          }
        });

        /* ---------------------------
         * ESC KEY SUPPORT (REQUIRED FOR REVIEW)
         * --------------------------- */
        document.addEventListener('keydown', (e) => {
          if (e.key === 'Escape' && searchForm.classList.contains('toggled-on')) {
            searchForm.classList.remove('toggled-on');
            body.classList.remove('show-search');

            toggleIcon?.setAttribute('aria-expanded', 'false');
            toggleIcon?.focus();
          }
        });

        /* ---------------------------
         * CLICK OUTSIDE TO CLOSE (FIXED)
         * --------------------------- */
        document.addEventListener('click', (e) => {
          const clickedInside =
            searchInnerContainer?.contains(e.target) ||
            toggleIcon?.contains(e.target);

          if (!clickedInside && searchForm.classList.contains('toggled-on')) {
            searchForm.classList.remove('toggled-on');
            body.classList.remove('show-search');

            toggleIcon?.setAttribute('aria-expanded', 'false');
          }
        });
      });
    },

    /* ---------------------------
     * PRODUCT VARIATIONS
     * --------------------------- */
    productVariations() {

      const colorMap = {
        blue: '#22b8e6',
        green: '#74d66b',
        red: '#f04e23',
        yellow: '#f4c542',
        gray: '#8a8a8a'
      };

      function createSwatches(table) {

        if (!table || table.dataset.swatchesBuilt) {
          return;
        }

        table.dataset.swatchesBuilt = 'true';

        table.querySelectorAll('select').forEach(select => {

          if (!select.parentNode) return;

          select.style.display = 'none';

          const wrapper = document.createElement('div');
          wrapper.className = 'wc-swatches';

          const isColor = select.id === 'pa_color';

          [...select.options].forEach(option => {

            if (!option.value) return;

            const swatch = document.createElement('button');
            swatch.type = 'button';
            swatch.className = isColor
              ? 'wc-swatch wc-color'
              : 'wc-swatch';

            swatch.dataset.value = option.value;

            if (isColor) {

              swatch.innerHTML = `
                        <span class="wc-color-box" style="background:${colorMap[option.value.toLowerCase()] || option.value};"></span>
                        <span>${option.text}</span>
                    `;

            } else {

              let label = option.text;

              switch (option.value.toLowerCase()) {
                case 'xsmall':
                  label = 'XS';
                  break;
                case 'small':
                  label = 'S';
                  break;
                case 'medium':
                  label = 'M';
                  break;
                case 'large':
                  label = 'L';
                  break;
                case 'huge':
                  label = 'H';
                  break;
              }

              swatch.textContent = label;
            }

            swatch.addEventListener('click', () => {

              if (swatch.classList.contains('disabled')) {
                return;
              }

              const active = swatch.classList.contains('active');

              wrapper.querySelectorAll('.wc-swatch').forEach(btn => {
                btn.classList.remove('active');
              });

              if (active) {

                select.value = '';

              } else {

                swatch.classList.add('active');
                select.value = swatch.dataset.value;

              }

              select.dispatchEvent(new Event('change', {
                bubbles: true
              }));

              requestAnimationFrame(syncAllSwatches);

            });

            wrapper.appendChild(swatch);

          });

          select.parentNode.appendChild(wrapper);

          select.addEventListener('change', () => {
            requestAnimationFrame(syncAllSwatches);
          });

        });

        syncAllSwatches();
      }

      function syncAllSwatches() {

        document.querySelectorAll('table.variations').forEach(table => {

          table.querySelectorAll('select').forEach(select => {

            if (!select.parentNode) return;

            const wrapper = select.parentNode.querySelector('.wc-swatches');

            if (!wrapper) return;

            const values = [...select.options].map(option => option.value);

            wrapper.querySelectorAll('.wc-swatch').forEach(btn => {

              const exists = values.includes(btn.dataset.value);

              btn.classList.toggle('disabled', !exists);

              btn.classList.toggle(
                'active',
                select.value === btn.dataset.value
              );

            });

          });

        });

      }

      function observeVariationForm(form) {

        if (!form || form.dataset.swatchObserver) {
          return;
        }

        form.dataset.swatchObserver = 'true';

        const table = form.querySelector('table.variations');

        if (table) {
          createSwatches(table);
        }

        const observer = new MutationObserver(() => {

          syncAllSwatches();

        });

        observer.observe(form, {
          childList: true,
          subtree: true,
          attributes: true
        });

      }

      document.querySelectorAll('form.variations_form').forEach(form => {
        observeVariationForm(form);
      });

      const pageObserver = new MutationObserver(() => {

        document.querySelectorAll('form.variations_form').forEach(form => {
          observeVariationForm(form);
        });

      });

      pageObserver.observe(document.body, {
        childList: true,
        subtree: true
      });

    },

    /* ---------------------------
     * PRODUCT FILTER TOGGLE
     * --------------------------- */
    productFilter() {

      document.querySelectorAll('.wp-product-filter .wp-element-button')
        .forEach((btn) => {
          btn.addEventListener('click', (e) => {
            e.stopPropagation();
            this.body.classList.toggle('filter-on');
          });
        });

      document.addEventListener('click', (e) => {
        const filter1 = document.querySelector('.wp-product-filter');
        const filter2 = document.querySelector('.wp-block-woocommerce-product-filters');

        if (
          (!filter1 || !filter1.contains(e.target)) &&
          (!filter2 || !filter2.contains(e.target))
        ) {
          this.body.classList.remove('filter-on');
        }
      });
    },

    /* ---------------------------
     * CUSTOM SCROLLBAR
     * --------------------------- */
    customScrollbar() {
      document.querySelectorAll('.wp-block-featured-category .wc-block-product-template').forEach(container => {
        if (container.dataset.scrollbar) return;

        container.dataset.scrollbar = true;

        const track = document.createElement('div');
        const thumb = document.createElement('div');

        track.className = 'custom-scrollbar';
        thumb.className = 'custom-scrollbar-thumb';

        track.appendChild(thumb);
        if (!container.parentElement) return;
        container.parentElement.appendChild(track);

        let isDragging = false;
        let startX = 0;
        let startLeft = 0;

        // Update thumb size + position
        const updateScrollbar = () => {
          const visibleRatio =
            container.clientWidth / container.scrollWidth;

          const thumbWidth = Math.max(
            track.clientWidth * visibleRatio * 0.45,
            30
          );
          thumb.style.width = `${thumbWidth}px`;

          const maxThumbMove =
            track.clientWidth - thumb.offsetWidth;

          const maxScroll =
            Math.max(container.scrollWidth - container.clientWidth, 1);

          const thumbLeft =
            (container.scrollLeft / maxScroll) * maxThumbMove || 0;

          thumb.style.left = `${thumbLeft}px`;
        };

        // Sync thumb on scroll
        container.addEventListener(
          'scroll',
          () => {
            if (!isDragging) {
              updateScrollbar();
            }
          },
          { passive: true }
        );

        // Start dragging
        const startDrag = (e) => {
          isDragging = true;

          startX = e.clientX || e.touches[0].clientX;
          startLeft = parseFloat(thumb.style.left) || 0;

          document.body.style.userSelect = 'none';
          thumb.style.cursor = 'grabbing';
        };

        // Drag move
        const onDrag = (e) => {
          if (!isDragging) return;

          e.preventDefault();

          const clientX = e.clientX || e.touches[0].clientX;
          const deltaX = clientX - startX;

          const maxThumbMove =
            track.clientWidth - thumb.offsetWidth;

          let newLeft = startLeft + deltaX;

          newLeft = Math.max(
            0,
            Math.min(newLeft, maxThumbMove)
          );

          thumb.style.left = `${newLeft}px`;

          // Scroll items while dragging
          const scrollRatio =
            newLeft / maxThumbMove;

          container.scrollLeft =
            scrollRatio *
            (container.scrollWidth - container.clientWidth);
        };

        // Stop dragging
        const stopDrag = () => {
          isDragging = false;
          document.body.style.userSelect = '';
          thumb.style.cursor = 'grab';
        };

        // Mouse events
        thumb.addEventListener('mousedown', startDrag);
        document.addEventListener('mousemove', onDrag);
        document.addEventListener('mouseup', stopDrag);

        // Touch events
        thumb.addEventListener('touchstart', startDrag, {
          passive: true
        });

        document.addEventListener('touchmove', onDrag, {
          passive: false
        });

        document.addEventListener('touchend', stopDrag);

        // Click track to move
        track.addEventListener('click', (e) => {
          if (e.target === thumb) return;

          const rect = track.getBoundingClientRect();

          const clickX =
            e.clientX - rect.left;

          const maxThumbMove =
            track.clientWidth - thumb.offsetWidth;

          let newLeft =
            clickX - thumb.offsetWidth / 2;

          newLeft = Math.max(
            0,
            Math.min(newLeft, maxThumbMove)
          );

          thumb.style.left = `${newLeft}px`;

          const scrollRatio =
            newLeft / maxThumbMove;

          container.scrollLeft =
            scrollRatio *
            (container.scrollWidth - container.clientWidth);
        });

        window.addEventListener(
          'resize',
          updateScrollbar
        );

        updateScrollbar();
      });
    },

    /* ---------------------------
    * ADD CLASS WHEN SECTION ENTERS VIEWPORT
    * --------------------------- */
    addClassWithViewPort() {

      function isInViewport(elem) {
        if (!elem) return false;
        let distance = elem.getBoundingClientRect();
        let windowHeight = window.innerHeight || document.documentElement.clientHeight;
        let elementMiddle = distance.top + distance.height / 2;
        return elementMiddle >= 0 && elementMiddle <= windowHeight;
      }

      function checkSectionsInView() {
        const sections = document.querySelectorAll('.caos');
        sections.forEach(element => {
          // Only add the class if it's in the viewport and hasn't been added before
          if (!element.classList.contains("caos-init") && isInViewport(element)) {
            element.classList.add("caos-init");
          }

          // DO NOT remove the class if the element goes out of view
          // This part is intentionally left out
        });
      }

      // Run on scroll, resize, load
      window.addEventListener('scroll', checkSectionsInView, false);
      window.addEventListener('resize', checkSectionsInView);
      window.addEventListener('DOMContentLoaded', checkSectionsInView);
      window.addEventListener('load', checkSectionsInView);
    },

    /* ---------------------------
     * SHOW PRODUCT ITEMS WITH EFFECTS
     * --------------------------- */
    showProductItemsWithEffects() {

      document.querySelectorAll('.wp-block-featured-category, .wp-block-products-top-rated, .wp-block-products-on-sale').forEach(section => {

        const list = section.querySelector('ul.wc-block-product-template');

        if (!list) return;

        const items = Array.from(section.querySelectorAll('li.wc-block-product'));

        if (!items.length) return;

        let initialBatchDone = false;

        const observer = new IntersectionObserver((entries) => {

          entries.forEach(entry => {
            if (!entry.isIntersecting) return;

            const item = entry.target;

            const rect = item.getBoundingClientRect();
            const listRect = list.getBoundingClientRect();

            const index = items.indexOf(item);

            // PHASE 1 vs PHASE 2
            const isInitial =
              rect.left < listRect.right && !initialBatchDone;

            const delay = isInitial
              ? index * 120
              : index * 35; // faster for rest

            item.style.transitionDelay = `${delay}ms`;

            requestAnimationFrame(() => {
              item.classList.add('item-show');
            });

            observer.unobserve(item);
          });

        }, {
          root: list,
          threshold: 0.15
        });

        const classObserver = new MutationObserver(() => {

          if (!section.classList.contains('caos-init')) return;

          const listRect = list.getBoundingClientRect();

          let visibleCount = 0;

          items.forEach((item, index) => {

            const rect = item.getBoundingClientRect();

            const visible =
              rect.left < listRect.right &&
              rect.right > listRect.left;

            if (visible) {

              visibleCount++;

              item.style.transitionDelay = `${index * 120}ms`;

              requestAnimationFrame(() => {
                item.classList.add('item-show');
              });

            } else {
              observer.observe(item);
            }
          });

          // after first batch is handled → switch to fast mode
          initialBatchDone = true;

          classObserver.disconnect();
        });

        classObserver.observe(section, {
          attributes: true,
          attributeFilter: ['class']
        });
      });
    },

    /* ---------------------------
     * SHOW SLIDER DOTS FOR WOOCOMMECE PRODUCT CAROUSEL
     * --------------------------- */
    woocommerceNavDotsForCarousel() {
      document.querySelectorAll('ul.is-product-collection-layout-carousel').forEach((slider) => {
        if (slider.dataset.dotsInit) return;
        slider.dataset.dotsInit = 'true';

        const wrapper = slider.parentElement;


        // Create dots container
        const dotsWrap = document.createElement('div');
        dotsWrap.className = 'wc-carousel-dots';

        if (!wrapper) return;

        wrapper.appendChild(dotsWrap);

        const getVisibleItems = () => {
          const item = slider.querySelector('li');
          if (!item) return 1;

          return Math.round(slider.offsetWidth / item.offsetWidth);
        };

        const createDots = () => {
          dotsWrap.innerHTML = '';

          const items = slider.querySelectorAll('li');
          if (!items.length) return;

          const visibleItems = getVisibleItems();
          const totalSlides = Math.ceil(items.length / visibleItems);

          for (let i = 0; i < totalSlides; i++) {
            const dot = document.createElement('button');
            dot.className = 'dot';

            if (i === 0) dot.classList.add('active');

            dot.addEventListener('click', () => {
              const itemWidth = items[0].offsetWidth;

              slider.scrollTo({
                left: i * itemWidth * visibleItems,
                behavior: 'smooth'
              });
            });

            dotsWrap.appendChild(dot);
          }
        };

        const updateActiveDot = () => {
          const items = slider.querySelectorAll('li');
          if (!items.length) return;

          const visibleItems = getVisibleItems();
          const itemWidth = items[0].offsetWidth;

          const currentSlide = Math.round(
            slider.scrollLeft / (itemWidth * visibleItems)
          );

          dotsWrap.querySelectorAll('.dot').forEach((dot, index) => {
            dot.classList.toggle('active', index === currentSlide);
          });
        };

        createDots();
        updateActiveDot();

        slider.addEventListener('scroll', () => {
          requestAnimationFrame(updateActiveDot);
        });

        window.addEventListener('resize', () => {
          createDots();
          updateActiveDot();
        });
      });
    },

    /* ---------------------------
    * WOOCOMMECE PRODUCT CAROUSEL DRAGABLE
    * --------------------------- */
    woocommerceCarouselDragable() {
      document.querySelectorAll('.wp-block-featured-category .wc-block-product-template, ul.is-product-collection-layout-carousel').forEach((slider) => {
        if (slider.dataset.dragInit) return;
        slider.dataset.dragInit = 'true';

        let isDown = false;
        let startX;
        let scrollLeft;
        let isDragging = false;

        /*  slider.style.cursor = 'grab'; */

        slider.addEventListener('mousedown', (e) => {
          isDown = true;
          isDragging = false;

          slider.classList.add('dragging');

          startX = e.pageX;
          scrollLeft = slider.scrollLeft;
        });

        window.addEventListener('mouseup', () => {
          isDown = false;
          slider.classList.remove('dragging');
        });

        window.addEventListener('mousemove', (e) => {
          if (!isDown) return;

          e.preventDefault();

          const x = e.pageX;
          const walk = (x - startX) * 1.4;

          if (Math.abs(walk) > 5) {
            isDragging = true;
          }

          // smooth native scrolling
          slider.scrollLeft = scrollLeft - walk;
        });

        // Prevent clicks while dragging
        slider.querySelectorAll('a').forEach(link => {
          link.addEventListener('click', (e) => {
            if (isDragging) {
              e.preventDefault();
              e.stopPropagation();
            }
          });
        });
      });
    },

    /* ---------------------------
    * PRODUCT CATEGORY VERTICAL SCROLL
    * --------------------------- */
    productCategoryVerticalScroll() {
      document.querySelectorAll('.wp-block-new-collection').forEach(section => {

        const initAnimation = () => {

          const list = section.querySelector('ul');

          if (!list) return;

          const items = Array.from(list.querySelectorAll('li'));

          if (!items.length) return;

          let initialCount = 0;

          const observer = new IntersectionObserver((entries) => {

            entries.forEach(entry => {

              if (!entry.isIntersecting) return;

              const item = entry.target;

              let delay;

              // First 5 items = slower stagger
              if (initialCount < 5) {

                delay = initialCount * 200;
                initialCount++;

              } else {

                // Faster loading while scrolling
                delay = 50;

              }

              item.style.transitionDelay = `${delay}ms`;

              requestAnimationFrame(() => {
                item.classList.add('item-show');
              });

              observer.unobserve(item);

            });

          }, {
            root: list,
            threshold: 0.15
          });

          items.forEach(item => {
            observer.observe(item);
          });

        };

        // If already initialized
        if (section.classList.contains('caos-init')) {
          initAnimation();
          return;
        }

        // Wait for caos-init class
        const classObserver = new MutationObserver(() => {

          if (!section.classList.contains('caos-init')) return;

          initAnimation();
          classObserver.disconnect();

        });

        classObserver.observe(section, {
          attributes: true,
          attributeFilter: ['class']
        });

      });
    },

    /* ---------------------------
    * PRODUCT CATEGORY VERTICAL DRAG
    * --------------------------- */
    productCategoryVerticalDrag() {
      document.querySelectorAll('.wp-block-new-collection ul').forEach(list => {

        let isDown = false;
        let startY;
        let scrollTop;

        list.addEventListener('mousedown', (e) => {

          isDown = true;
          list.classList.add('dragging');

          startY = e.pageY;
          scrollTop = list.scrollTop;

        });

        document.addEventListener('mouseup', () => {
          isDown = false;
          list.classList.remove('dragging');
        });

        document.addEventListener('mousemove', (e) => {

          if (!isDown) return;

          e.preventDefault();

          const y = e.pageY;
          const walk = (y - startY) * 1.5;

          list.scrollTop = scrollTop - walk;

        });

      });
    },

    /* ---------------------------
    * PRODUCT CATEGORY VERTICAL CUSTOM SCROLL BAR
    * --------------------------- */
    productCategoryVerticalCustomScrollBar() {
      document.querySelectorAll('.wp-block-new-collection ul').forEach(container => {

        if (container.dataset.scrollbar) return;
        container.dataset.scrollbar = true;

        const track = document.createElement('div');
        const thumb = document.createElement('div');

        track.className = 'custom-scrollbar-vertical';
        thumb.className = 'custom-scrollbar-thumb-vertical';

        track.appendChild(thumb);
        container.parentElement.appendChild(track);

        let isDragging = false;
        let startY = 0;
        let startTop = 0;

        const updateScrollbar = () => {

          const visibleRatio =
            container.clientHeight / container.scrollHeight;

          const thumbHeight = Math.max(
            track.clientHeight * visibleRatio * 0.45,
            40
          );

          thumb.style.height = `${thumbHeight}px`;

          const maxThumbMove =
            track.clientHeight - thumb.offsetHeight;

          const maxScroll =
            Math.max(container.scrollHeight - container.clientHeight, 1);

          const thumbTop =
            (container.scrollTop / maxScroll) * maxThumbMove || 0;

          thumb.style.top = `${thumbTop}px`;
        };

        // Sync thumb while scrolling
        container.addEventListener('scroll', () => {

          if (!isDragging) {
            updateScrollbar();
          }

        }, { passive: true });

        // Start drag
        const startDrag = (e) => {

          isDragging = true;

          startY = e.clientY || e.touches[0].clientY;
          startTop = parseFloat(thumb.style.top) || 0;

          document.body.style.userSelect = 'none';
          thumb.style.cursor = 'grabbing';
        };

        // Drag move
        const onDrag = (e) => {

          if (!isDragging) return;

          e.preventDefault();

          const clientY =
            e.clientY || e.touches[0].clientY;

          const deltaY = clientY - startY;

          const maxThumbMove =
            track.clientHeight - thumb.offsetHeight;

          let newTop = startTop + deltaY;

          newTop = Math.max(
            0,
            Math.min(newTop, maxThumbMove)
          );

          thumb.style.top = `${newTop}px`;

          const scrollRatio =
            newTop / maxThumbMove;

          container.scrollTop =
            scrollRatio *
            (container.scrollHeight - container.clientHeight);
        };

        // Stop drag
        const stopDrag = () => {

          isDragging = false;

          document.body.style.userSelect = '';
          thumb.style.cursor = 'grab';
        };

        // Mouse
        thumb.addEventListener('mousedown', startDrag);
        document.addEventListener('mousemove', onDrag);
        document.addEventListener('mouseup', stopDrag);

        // Touch
        thumb.addEventListener('touchstart', startDrag, {
          passive: true
        });

        document.addEventListener('touchmove', onDrag, {
          passive: false
        });

        document.addEventListener('touchend', stopDrag);

        // Track click
        track.addEventListener('click', (e) => {

          if (e.target === thumb) return;

          const rect = track.getBoundingClientRect();

          const clickY =
            e.clientY - rect.top;

          const maxThumbMove =
            track.clientHeight - thumb.offsetHeight;

          let newTop =
            clickY - thumb.offsetHeight / 2;

          newTop = Math.max(
            0,
            Math.min(newTop, maxThumbMove)
          );

          thumb.style.top = `${newTop}px`;

          const scrollRatio =
            newTop / maxThumbMove;

          container.scrollTop =
            scrollRatio *
            (container.scrollHeight - container.clientHeight);
        });

        window.addEventListener('resize', updateScrollbar);

        updateScrollbar();
      });
    },

    /* ---------------------------
    * BLOG SHOP ITEM SHOW
    * --------------------------- */
    blogShopItemsShow() {
      const grid = document.querySelector('.animate-products .wc-block-product-template, .wp-block-post-template');

      function initReveal() {
        const items = document.querySelectorAll('.animate-products .wc-block-product-template .wc-block-product, .wp-block-post-template .wp-block-post');

        if (!items.length) return;

        const observer = new IntersectionObserver((entries, obs) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              const el = entry.target;

              const index = [...items].indexOf(el);

              setTimeout(() => {
                el.classList.add('is-visible');
              }, index * 60);

              obs.unobserve(el);
            }
          });
        }, {
          threshold: 0.15
        });

        items.forEach(item => observer.observe(item));
      }

      // initial load
      initReveal();

      // detect pagination / DOM replacement
      const mutationObserver = new MutationObserver(() => {
        initReveal();
      });

      if (grid) {
        mutationObserver.observe(grid, {
          childList: true,
          subtree: true
        });
      }
    },

    /* ---------------------------
    * Woocommerce Catalog Sorting
    * --------------------------- */
    wooCatalogSorting() {
      (function () {
        function initSortLabel() {
          const form = document.querySelector(".woocommerce-ordering");
          const select = document.querySelector(".orderby");

          if (!form || !select) return;

          if (document.querySelector(".wc-sort-label")) return;

          const label = document.createElement("span");
          label.className = "wc-sort-label";

          form.parentNode.insertBefore(label, form);

          function updateLabel() {
            if (!select.options.length || select.selectedIndex < 0) return;

            const text = select.options[select.selectedIndex].text;

            // split "Sort by xxx"
            const prefix = "Sort by";
            let value = text;

            if (text.toLowerCase().startsWith("sort by")) {
              value = text.replace(/sort by/i, "").trim();
            }

            label.innerHTML = `${prefix} <span class="wc-sort-value">${value}</span>`;
          }

          updateLabel();
          select.addEventListener("change", updateLabel);
        }

        initSortLabel();

        const observer = new MutationObserver(() => {
          initSortLabel();
        });

        observer.observe(document.body, {
          childList: true,
          subtree: true
        });
      })();
    },

    /* ---------------------------
    * Woocommerce Sidebar Product Filter Show/Hide
    * --------------------------- */
    sidebarFilterShowHide() {
      document.addEventListener('click', function (e) {
        const btn = e.target.closest('.filter-btn');
        const sidebar = document.querySelector('.wp-product-sidebar-column');
        const sidebarToggle = document.querySelector('.toggle-product-sidebar');

        // Filter button clicked
        if (btn) {
          e.preventDefault();

          sidebarToggle?.classList.toggle('sidebar-open');
          document.body.classList.toggle('is-product-filter-open');

          return;
        }

        // Only allow click-outside closing between 601px and 991px
        if (window.innerWidth < 601 || window.innerWidth > 991) {
          return;
        }

        // If filter isn't open, do nothing
        if (!document.body.classList.contains('is-product-filter-open')) {
          return;
        }

        // Ignore clicks inside the sidebar
        if (sidebar && sidebar.contains(e.target)) {
          return;
        }

        // Close the sidebar
        document.body.classList.remove('is-product-filter-open');
        sidebarToggle?.classList.remove('sidebar-open');
      });
    }

  };

  /* ---------------------------
   * INIT ON DOM READY
   * --------------------------- */
  document.addEventListener('DOMContentLoaded', function () {
    prestivo.init();
  });
})();
