/**
 *    Copyright (c) ppy Pty Ltd <contact@ppy.sh>.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

import * as React from 'react';
import { ReportForm } from 'report-form';

import BeatmapDiscussionPostJSON from 'beatmap-discussions/post-json';

interface Props {
  post: BeatmapDiscussionPostJSON;
  user: User;
}

interface State {
  completed: boolean;
  disabled: boolean;
  showingForm: boolean;
}

export default class ReportBeatmapDiscussionPost extends React.Component<Props, State> {
  private timeout?: number;

  constructor(props: Props) {
    super(props);

    this.state = {
      completed: false,
      disabled: false,
      showingForm: false,
    };
  }

  onFormClose = () => {
    this.setState({
      disabled: false,
      showingForm: false,
    });
  }

  onSubmit = ({comments}: {comments: string}) => {
    this.setState({disabled: true});

    $.ajax({
      data: { comments },
      dataType: 'json',
      type: 'POST',
      url: laroute.route('beatmap-discussion-posts.report', {beatmap_discussion_post: this.props.post.id}),
    }).done(() => {
      this.timeout = Timeout.set(1000, this.onFormClose);
      this.setState({completed: true});
    }).fail((xhr) => {
      osu.ajaxError(xhr);
      this.setState({disabled: false});
    });
  }

  render(): React.ReactNode {
    const { user, post, ...attribs } = this.props;
    return (
      <>
        <button onClick={this.showForm} {...attribs}>
          {osu.trans('report.beatmap-discussion-post.button')}
        </button>
        <ReportForm
          allowOptions={false}
          completed={this.state.completed}
          disabled={this.state.disabled}
          onClose={this.onFormClose}
          onSubmit={this.onSubmit}
          title={osu.trans('report.beatmap-discussion-post.title', {username: `<strong>${user.username}</strong>`})}
          visible={this.state.showingForm}
        />
      </>
    );
  }

  showForm = (e: React.MouseEvent) => {
    if (e.button !== 0) {
      return;
    }

    e.preventDefault();

    Timeout.clear(this.timeout);
    this.setState({
      disabled: false,
      showingForm: true,
    });
  }
}
