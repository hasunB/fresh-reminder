<?php
if ( ! defined( 'ABSPATH' ) ) exit;


class FRESRE_Logger {

    public static function log( $message, $level) {

        if ( ! defined( 'WP_DEBUG' ) || ! WP_DEBUG ) return;

        if ( ! defined( 'WP_DEBUG_LOG' ) || ! WP_DEBUG_LOG ) return;

        // Sanitize the log entry
        $message = wp_kses_data( $message );
        $level   = sanitize_key( $level );
        $time    = gmdate( 'Y-m-d H:i:s' );
        $entry   = sprintf( "[%s] [%s] %s%s", $time, $level, $message, PHP_EOL );

        // Get WordPress uploads directory
        $upload_dir = wp_upload_dir();

        // Plugin logs directory: /uploads/fresh-reminder/
        $log_directory = trailingslashit( $upload_dir['basedir'] ) . 'fresh-reminder/';

        // Create directory if missing
        if ( ! file_exists( $log_directory ) ) {
            wp_mkdir_p( $log_directory );
        }

        // Log file path
        $log_file = $log_directory . 'fresh-reminder.log';

        // Append the log entry safely
        file_put_contents( $log_file, $entry, FILE_APPEND | LOCK_EX );
    }
}



?>