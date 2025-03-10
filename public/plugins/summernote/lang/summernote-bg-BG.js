/*!
 * 
<<<<<<< HEAD
 * Super simple WYSIWYG editor v0.8.20
 * https://summernote.org
 *
 *
 * Copyright 2013- Alan Hong and contributors
 * Summernote may be freely distributed under the MIT license.
 *
 * Date: 2021-10-14T21:15Z
 *
=======
 * Super simple wysiwyg editor v0.8.18
 * https://summernote.org
 * 
 * 
 * Copyright 2013- Alan Hong. and other contributors
 * summernote may be freely distributed under the MIT license.
 * 
 * Date: 2020-05-20T16:47Z
 * 
>>>>>>> switch-to-mysql
 */
(function webpackUniversalModuleDefinition(root, factory) {
	if(typeof exports === 'object' && typeof module === 'object')
		module.exports = factory();
	else if(typeof define === 'function' && define.amd)
		define([], factory);
	else {
		var a = factory();
		for(var i in a) (typeof exports === 'object' ? exports : root)[i] = a[i];
	}
<<<<<<< HEAD
})(self, function() {
return /******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
=======
})(window, function() {
return /******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 9);
/******/ })
/************************************************************************/
/******/ ({

/***/ 9:
/***/ (function(module, exports) {

>>>>>>> switch-to-mysql
(function ($) {
  $.extend($.summernote.lang, {
    'bg-BG': {
      font: {
        bold: 'Удебелен',
        italic: 'Наклонен',
        underline: 'Подчертан',
        clear: 'Изчисти стиловете',
        height: 'Височина',
        name: 'Шрифт',
        strikethrough: 'Задраскано',
        subscript: 'Долен индекс',
        superscript: 'Горен индекс',
        size: 'Размер на шрифта'
      },
      image: {
        image: 'Изображение',
        insert: 'Постави картинка',
        resizeFull: 'Цял размер',
        resizeHalf: 'Размер на 50%',
        resizeQuarter: 'Размер на 25%',
        floatLeft: 'Подравни в ляво',
        floatRight: 'Подравни в дясно',
        floatNone: 'Без подравняване',
<<<<<<< HEAD
        shapeRounded: 'Форма: Заоблено',
        shapeCircle: 'Форма: Кръг',
        shapeThumbnail: 'Форма: Миниатюра',
        shapeNone: 'Форма: Без',
        dragImageHere: 'Пуснете изображението тук',
        dropImage: 'Пуснете Изображение или Текст',
        selectFromFiles: 'Изберете файл',
        maximumFileSize: 'Максимален размер на файла',
        maximumFileSizeError: 'Достигнат Максимален размер на файла.',
        url: 'URL адрес на изображение',
        remove: 'Премахни изображение',
        original: 'Оригинал'
      },
      video: {
        video: 'Видео',
        videoLink: 'Видео линк',
        insert: 'Добави Видео',
        url: 'Видео URL?',
=======
        shapeRounded: 'Shape: Rounded',
        shapeCircle: 'Shape: Circle',
        shapeThumbnail: 'Shape: Thumbnail',
        shapeNone: 'Shape: None',
        dragImageHere: 'Пуснете изображението тук',
        dropImage: 'Drop image or Text',
        selectFromFiles: 'Изберете файл',
        maximumFileSize: 'Maximum file size',
        maximumFileSizeError: 'Maximum file size exceeded.',
        url: 'URL адрес на изображение',
        remove: 'Премахни изображение',
        original: 'Original'
      },
      video: {
        video: 'Video',
        videoLink: 'Video Link',
        insert: 'Insert Video',
        url: 'Video URL?',
>>>>>>> switch-to-mysql
        providers: '(YouTube, Vimeo, Vine, Instagram, DailyMotion or Youku)'
      },
      link: {
        link: 'Връзка',
        insert: 'Добави връзка',
        unlink: 'Премахни връзка',
        edit: 'Промени',
        textToDisplay: 'Текст за показване',
        url: 'URL адрес',
        openInNewWindow: 'Отвори в нов прозорец'
      },
      table: {
        table: 'Таблица',
<<<<<<< HEAD
        addRowAbove: 'Добави ред отгоре',
        addRowBelow: 'Добави ред отдолу',
        addColLeft: 'Добави колона отляво',
        addColRight: 'Добави колона отдясно',
        delRow: 'Изтрии ред',
        delCol: 'Изтрии колона',
        delTable: 'Изтрии таблица'
=======
        addRowAbove: 'Add row above',
        addRowBelow: 'Add row below',
        addColLeft: 'Add column left',
        addColRight: 'Add column right',
        delRow: 'Delete row',
        delCol: 'Delete column',
        delTable: 'Delete table'
>>>>>>> switch-to-mysql
      },
      hr: {
        insert: 'Добави хоризонтална линия'
      },
      style: {
        style: 'Стил',
        p: 'Нормален',
        blockquote: 'Цитат',
        pre: 'Код',
        h1: 'Заглавие 1',
        h2: 'Заглавие 2',
        h3: 'Заглавие 3',
        h4: 'Заглавие 4',
        h5: 'Заглавие 5',
        h6: 'Заглавие 6'
      },
      lists: {
        unordered: 'Символен списък',
        ordered: 'Цифров списък'
      },
      options: {
        help: 'Помощ',
        fullscreen: 'На цял екран',
        codeview: 'Преглед на код'
      },
      paragraph: {
        paragraph: 'Параграф',
        outdent: 'Намаляване на отстъпа',
        indent: 'Абзац',
        left: 'Подравняване в ляво',
        center: 'Център',
        right: 'Подравняване в дясно',
        justify: 'Разтягане по ширина'
      },
      color: {
        recent: 'Последния избран цвят',
        more: 'Още цветове',
        background: 'Цвят на фона',
        foreground: 'Цвят на шрифта',
        transparent: 'Прозрачен',
        setTransparent: 'Направете прозрачен',
        reset: 'Възстанови',
        resetToDefault: 'Възстанови оригиналните',
        cpSelect: 'Изберете'
      },
      shortcut: {
        shortcuts: 'Клавишни комбинации',
        close: 'Затвори',
        textFormatting: 'Форматиране на текста',
        action: 'Действие',
        paragraphFormatting: 'Форматиране на параграф',
        documentStyle: 'Стил на документа',
<<<<<<< HEAD
        extraKeys: 'Екстра бутони'
      },
      help: {
        'insertParagraph': 'Добави Параграф',
        'undo': 'Отмени последната промяна',
        'redo': 'Върни последната промяна',
        'tab': 'Tab',
        'untab': 'Untab',
        'bold': 'Удебели',
        'italic': 'Приложи наклонен стил',
        'underline': 'Приложи подчераване',
        'strikethrough': 'Приложи зачеркнат стил',
        'removeFormat': 'Изчисти стилове',
        'justifyLeft': 'Подравняване в ляво',
        'justifyCenter': 'Подравняване в центъра',
        'justifyRight': 'Подравняване в дясно',
        'justifyFull': 'Двустранно подравняване',
=======
        extraKeys: 'Extra keys'
      },
      help: {
        'insertParagraph': 'Insert Paragraph',
        'undo': 'Undoes the last command',
        'redo': 'Redoes the last command',
        'tab': 'Tab',
        'untab': 'Untab',
        'bold': 'Set a bold style',
        'italic': 'Set a italic style',
        'underline': 'Set a underline style',
        'strikethrough': 'Set a strikethrough style',
        'removeFormat': 'Clean a style',
        'justifyLeft': 'Set left align',
        'justifyCenter': 'Set center align',
        'justifyRight': 'Set right align',
        'justifyFull': 'Set full align',
>>>>>>> switch-to-mysql
        'insertUnorderedList': 'Toggle unordered list',
        'insertOrderedList': 'Toggle ordered list',
        'outdent': 'Outdent on current paragraph',
        'indent': 'Indent on current paragraph',
        'formatPara': 'Change current block\'s format as a paragraph(P tag)',
        'formatH1': 'Change current block\'s format as H1',
        'formatH2': 'Change current block\'s format as H2',
        'formatH3': 'Change current block\'s format as H3',
        'formatH4': 'Change current block\'s format as H4',
        'formatH5': 'Change current block\'s format as H5',
        'formatH6': 'Change current block\'s format as H6',
<<<<<<< HEAD
        'insertHorizontalRule': 'Вмъкни хоризонтално правило',
=======
        'insertHorizontalRule': 'Insert horizontal rule',
>>>>>>> switch-to-mysql
        'linkDialog.show': 'Show Link Dialog'
      },
      history: {
        undo: 'Назад',
        redo: 'Напред'
      },
      specialChar: {
        specialChar: 'SPECIAL CHARACTERS',
<<<<<<< HEAD
        select: 'Избери Специални символи'
=======
        select: 'Select Special characters'
>>>>>>> switch-to-mysql
      }
    }
  });
})(jQuery);
<<<<<<< HEAD
/******/ 	return __webpack_exports__;
/******/ })()
;
});
//# sourceMappingURL=summernote-bg-BG.js.map
=======

/***/ })

/******/ });
});
>>>>>>> switch-to-mysql
