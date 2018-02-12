/**
 * Created by JOSIAH on 2/3/2018.
 */
/**
 * Build a new $.notify bootstrap plugin function (kNotify) for easy utilization
 * @param options | Objects
 */

function kNotify(options) {
    if (objectLength(options) > 0) {
        let alertPadding = options.padding === null ? 0 : options.padding;
        let icon = options.icon !== null ? options.icon : null;
        let type = options.type;
        let message = options.message;
        let progress = options.progress !== null ? options.progress : null;
        let link = options.link;
        let target = options.target !== '' ? options.target : null;
        let position = options.position !== null ? options.position : null;
        let delay = options.delay !== null ? options.delay : 5000;
        let _title;
        let tone = baseUrl + 'public/assets/sounds/alert.mp3';
        let animation = 'fadeInRight';

        if (type === 'warning') {
            icon = options.icon ? options.icon + ' k-notify-icon' : 'fa fa-warning warning k-notify-icon';
            _title = 'Warning';
            animation = 'tada';
        }

        if (type === 'success') {
            icon = options.icon ? options.icon + ' k-notify-icon' : 'sl sl-icon-check success k-notify-icon';
            _title = 'Success';
        }
        if (type === 'danger') {
            icon = options.icon ? options.icon + ' k-notify-icon' : 'sl sl-icon-close danger k-notify-icon';
            _title = 'Whoops!!';
            tone = baseUrl + 'public/assets/sounds/error.mp3';
            animation = 'tada';
        }
        if (type === 'info') {
            icon = options.icon ? options.icon + ' k-notify-icon' : 'sl sl-icon-info info k-notify-icon';
            _title = 'Notice';
        }

        let title = options.title ? options.title : _title;

        $.notify({
            // options
            icon: icon,
            title: title,
            message: message,
            url: link,
            target: target
        }, {
            // settings
            element: 'body',
            position: position,
            type: type,
            allow_dismiss: options.dismiss !== '' ? options.dismiss : true,
            newest_on_top: options.newest_first !== '' ? options.newest_first : true,
            showProgressbar: true,
            placement: {
                from: 'bottom',
                align: 'right'
            },
            offset: options.offset !== '' ? options.offset : 20,
            spacing: options.spacing !== '' ? options.spacing : 10,
            z_index: 1031,
            delay: 1000,
            timer: 10000,
            url_target: options.url_target !== '' ? options.url_target : '_blank',
            mouse_over: options.mouse_over ? options.mouse_over : 'pause',
            animate: options.animate ? options.animate : {
                enter: 'animated ' + animation,
                exit: 'animated fadeOutUp'
            },
            onShow: function () {
                let alert = new Audio(tone);
                alert.currentTime = 0.35;
                alert.play();
            },
            onShown: options.onShown !== '' ? options.onShown : null,
            onClose: options.onClose !== '' ? options.onClose : null,
            onClosed: options.onClosed !== '' ? options.onClosed : null,
            icon_type: 'class',
            template: '<div data-notify="container" class="col-xs-12 col-sm-7 col-md-6 col-lg-5 col-xl-4 k-notify-wrap p-' + alertPadding + ' alert alert-{0}" role="alert">' +
            '<a  aria-hidden="true" class="clos" data-notify="dismiss"><i uk-icon="icon: close"></i></a>' +
            '<span data-notify="icon"></span> ' +
            '<span data-notify="title" class="bold text-uppercase d-inline-block uk-text-truncate" style="font-size: 18px">' + title + '</span><br/> ' +
            '<span data-notify="message" class="k-notify-message">{2}</span>' +
            '<div class="progress" data-notify="progressbar">' +
            '<div class="progress-bar progress-bar-striped progress-bar-animated bg-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
            '</div>' +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
            '</div>'
        });

    }

}


/**
 * A simple object counter
 * @param object
 * @returns {number}
 * @constructor
 */

function objectLength(object) {
    let length = 0;
    for (let key in object) {
        if (object.hasOwnProperty(key)) {
            ++length;
        }
    }
    return length;
}

function moneyFormat(number) {
    let num = number.toString();
    return num.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
}

function formatBytes(bytes, decimals) {
    if (bytes === 0) return '0 Bytes';
    if (bytes === 1) return '1 Byte';
    if (bytes === -1) return '-1 Byte';
    let k = 1024,
        dm = decimals || 2,
        sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'],
        i = Math.floor(Math.log(bytes) / Math.log(k));
    return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
}

/**
 * Manipulate K_password
 */


function showHidePassword() {
    $('.kp-control').on('click', function (e) {
        e.preventDefault();
        let control_id = this.id;
        let k_pass_target = $(`[data-kp=${control_id}`);
        let input_field_value = k_pass_target.val();
        let input_field_type = k_pass_target.attr('type');

        if (input_field_value != '') {
            if (input_field_type == 'password') {
                k_pass_target.attr('type', 'text');
                $(this).html(`Hide`);
            }
            else if (input_field_type == 'text') {
                k_pass_target.attr('type', 'password');
                $(this).html(`Show`);
            }
        }
        // else {
        //     kNotify({
        //         type: 'danger',
        //         title: 'Empty password field',
        //         message: '<b>Sorry!!</b> You can only show or hide password when password field is not empty.',
        //         progress: true
        //     });
        // }

    });

}

showHidePassword(); //Activate show/hide password function


jQuery(document).ready(function () {
    const kyScrollable = $('.ky-scrollable');
    if(kyScrollable.length) {
        kyScrollable.scrollbar();
    }
});

