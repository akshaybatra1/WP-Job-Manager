<p><?php printf( __( 'To apply for this job <strong>email your details to</strong> <a class="job_application_email" href="mailto:%1$s%2$s">%1$s</a>', 'wp-job-manager' ), $apply->email, '?subject=' . rawurlencode( $apply->subject ) ); ?></p>
