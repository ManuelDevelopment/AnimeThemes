<?php

return [
    'admin' => 'Admin',
    'alias' => 'Alias',
    'anime' => 'Anime',
    'anime_alias_help' => 'Used as the URL Slug / Model Route Key. By default, this should be the Name lowercased and "_" replacing spaces. Shortenings/Abbreviations are also accepted. Ex: "monogatari", "code_geass", "danmachi".',
    'anime_create_resource_action' => 'Create :type Resource for Anime',
    'anime_create_resource_action_cardinality_error' => 'Create External Resource for Anime Action should only be applied to a single anime at a time',
    'anime_create_resource_action_success' => 'The Resource has been created and attached to Anime',
    'anime_mal_resource_lens' => 'Anime Without :mal Resource',
    'anime_name_help' => 'The display title of the Anime. By default, we will use the same title as MAL. Ex: "Bakemonogatari", "Code Geass: Hangyaku no Lelouch", "Dungeon ni Deai wo Motomeru no wa Machigatteiru Darou ka".',
    'anime_season_help' => 'The Season in which the Anime premiered. By default, we will use the Premiered Field on the MAL page.',
    'anime_year_help' => 'The Year in which the Anime premiered. By default, we will use the Premiered Field on the MAL page.',
    'announcement' => 'Announcement',
    'announcement_alias_help' => 'Internal identifier for Announcement',
    'announcements' => 'Announcements',
    'artist' => 'Artist',
    'artist_alias_help' => 'Used as the URL Slug / Model Route Key. By default, this should be the Name lowercased and "_" replacing spaces. Shortenings/Abbreviations are also accepted. Ex: "aimer", "yui_horie", "falilv"',
    'artist_name_help' => 'The display title of the Artist. By default, we will use the same title as MAL, but we will prefer "[Given Name] [Family name]". Ex: "Aimer", "Yui Horie", "Fear, and Loathing in Las Vegas".',
    'artists' => 'Artists',
    'basename' => 'Basename',
    'by' => 'By',
    'content' => 'Content',
    'email' => 'Email',
    'episodes' => 'Episodes',
    'entries' => 'Entries',
    'entry' => 'Entry',
    'entry_episodes_help' => 'The range(s) of episodes that the theme entry is used. Can be left blank if used for all episodes or if there are not episodes as with movies. Ex: "1-", "1-11", "1-2, 10, 12".',
    'entry_notes_help' => 'Any additional information not included in other fields that may be useful',
    'entry_nsfw_help' => 'Does the entry include Not Safe For Work content? Set at your discretion. There will not be rigid guidelines to define when this property should be set.',
    'entry_spoiler_help' => 'Does the entry include content that spoils the show? You may also include up to which episode is spoiled in Notes (Ex: Ep 6 spoilers).',
    'entry_version_help' => 'The Version number of the Theme. Can be left blank if there is only one version. Version is only required if there exist at least 2 in the sequence.',
    'error_resource_creation' => 'An error was encountered when creating the resource',
    'external_resource' => 'External Resource',
    'external_resources' => 'External Resources',
    'filename' => 'Filename',
    'group' => 'Group',
    'id' => 'ID',
    'label' => 'Label',
    'link' => 'Link',
    'lyrics' => 'Lyrics',
    'name' => 'Name',
    'nc' => 'NC',
    'no' => 'No',
    'notes' => 'Notes',
    'nsfw' => 'NSFW',
    'overlap' => 'Overlap',
    'password' => 'Password',
    'path' => 'Path',
    'resolution' => 'Resolution',
    'resource_label_help' => 'Used to distinguish resources that map to the same artist or anime. For example, Aware! Meisaku-kun has one MAL page and many aniDB pages.',
    'resource_link_help' => 'The URL of the resource. Ex: https://myanimelist.net/people/8/, https://anidb.net/creator/3/, https://kaguya.love/',
    'resource_type_help' => 'The site that we are linking to.',
    'season' => 'Season',
    'sequence' => 'Sequence',
    'series' => 'Series',
    'series_alias_help' => 'Used as the URL Slug / Model Route Key. By default, this should be the Name lowercased and "_" replacing spaces. Shortenings/Abbreviations are also accepted. Ex: "monogatari", "code_geass", "danmachi".',
    'series_name_help' => 'The display title of the Series. Ex: "Monogatari", "Code Geass", "Dungeon ni Deai wo Motomeru no wa Machigatteiru Darou ka".',
    'song' => 'Song',
    'song_by_subtitle' => 'By: :by',
    'song_by_help' => 'A listing of performers. Useful to distinguish sequences with a different set of performers on the same track. For character performances, please use character names. Otherwise, use the artists\' names. By default, leave this blank.',
    'song_title_help' => 'The title of the song',
    'songs' => 'Songs',
    'source' => 'Source',
    'spoiler' => 'Spoiler',
    'subbed' => 'Subbed',
    'synonym_text_help' => 'For alternative titles, licensed titles, common abbreviations and/or shortenings, ',
    'synonym' => 'Synonym',
    'synonyms' => 'Synonyms',
    'text' => 'Text',
    'theme' => 'Theme',
    'theme_group_help' => 'For separating sequences belonging to dubs, rebroadcasts, remasters, etc. By default, leave blank.',
    'theme_sequence_help' => 'Numeric ordering of theme. If only one theme of this type exists for the show, this can be left blank.',
    'theme_type_help' => 'Is this an OP or an ED?',
    'themes' => 'Themes',
    'title' => 'Title',
    'type' => 'Type',
    'uncen' => 'Uncensored',
    'user' => 'User',
    'users' => 'Users',
    'version' => 'Version',
    'video' => 'Video',
    'video_lyrics_help' => 'Set if this video has subtitles for song lyrics.',
    'video_metadata' => 'Video Metadata',
    'video_nc_help' => 'Set if this video is creditless.',
    'video_overlap_help' => 'The degree to which the sequence and episode content overlap. None: No overlap. Transition: partial overlap. Over: full overlap.',
    'video_resolution_help' => 'Frame height of the video',
    'video_source_help' => 'Where did this video come from?',
    'video_subbed_help' => 'Set if this video has subtitles of dialogue.',
    'video_uncen_help' => 'Set if this video is an uncensored version of a censored sequence.',
    'videos' => 'Videos',
    'wiki' => 'Wiki',
    'year' => 'Year',
    'yes' => 'Yes',
];
